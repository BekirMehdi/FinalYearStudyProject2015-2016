<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Ecommerce\EcommerceBundle\Entity\Categories;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Entity\Boutiques;
use Ecommerce\EcommerceBundle\Entity\BoutiquesPremium;
class BoutiquesController extends Controller
{  

    public function menAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produitsPremium = $em->getRepository('EcommerceBundle:ProduitsPremium')->findAll();
        
        return $this->render('EcommerceBundle:Default:categories/modulesUsed/men.html.twig', array('produitsPremium' => $produitsPremium));
    }
     public function meAction()
    {
        $em = $this->getDoctrine()->getManager();
        $boutiquesPremium = $em->getRepository('EcommerceBundle:BoutiquesPremium')->findAll();
        
        return $this->render('EcommerceBundle:Default:categories/modulesUsed/me.html.twig', array('boutiquesPremium' => $boutiquesPremium));
    }

 public function categorieGridAction(Categories $categorieGrid = null )
    {

        $em = $this->getDoctrine()->getManager();
        if ($categorieGrid != null)
            $findBoutiques = $em->getRepository('EcommerceBundle:Boutiques')->byCategorie($categorieGrid);
        	$categorie = $em->getRepository('EcommerceBundle:Categories')->find($categorieGrid);
        	$categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        	$sousCategories = $em->getRepository('EcommerceBundle:SousCategories')->findAll();
        $boutiques = $this->get('knp_paginator')->paginate($findBoutiques,$this->get('request')->query->get('page', 1),15);
        
        return $this->render('EcommerceBundle:Default:Boutiques/layout/categorieBoutiquesGrid.html.twig', array('boutiques' => $boutiques,'categorie' => $categorie,'categories' => $categories,'sousCategories' => $sousCategories));
    }  

       public function categorieListeAction(Categories $categorieListe = null )
    {

        $em = $this->getDoctrine()->getManager();
        if ($categorieListe != null)
            $findBoutiques = $em->getRepository('EcommerceBundle:Boutiques')->byCategorie($categorieListe);
        
        $boutiques = $this->get('knp_paginator')->paginate($findBoutiques,$this->get('request')->query->get('page', 1),15);
        
        return $this->render('EcommerceBundle:Default:Boutiques/layout/categorieBoutiquesListe.html.twig', array('boutiques' => $boutiques));
    }      
    
 public function produitAction(Boutiques $boutique = null )
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        if ($boutique != null)
            $findProduit = $em->getRepository('EcommerceBundle:Produits')->byBoutique($boutique);
        else 
            $findProduit = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => 1));
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        $produits = $this->get('knp_paginator')->paginate($findProduit,$this->get('request')->query->get('page', 1),10);
        
        return $this->render('EcommerceBundle:Default:produits/layout/acceuil.html.twig', array('produits' => $produits,
                                                                                                 'panier' => $panier));
    }    

    public function boutiqueVerticalAction()
    {
        $em = $this->getDoctrine()->getManager();
        $boutiquesPremium = $em->getRepository('EcommerceBundle:BoutiquesPremium')->findAll();
        
        return $this->render('EcommerceBundle:Default:Boutiques/layout/boutiquesVertical.html.twig', array('boutiquesPremium' => $boutiquesPremium));
    }
    
    public function boutiquesAction(Categories $categorie = null )
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        if ($categorie != null)
            $findBoutiques = $em->getRepository('EcommerceBundle:Boutiques')->byCategorie($categorie);
        else 
            $findBoutiques = $em->getRepository('EcommerceBundle:Boutiques')->findAll();
      
        $boutiques = $this->get('knp_paginator')->paginate($findBoutiques,$this->get('request')->query->get('page', 1),10);
        
        return $this->render('EcommerceBundle:Default:boutiques/layout/boutiques.html.twig', array('boutiques' => $boutiques));
    }
    
    public function presentationBoutiqueAction(Boutiques $idB = null)
    {
        $em = $this->getDoctrine()->getManager();
        $boutique = $em->getRepository('EcommerceBundle:Boutiques')->find($idB);
        
        if (!$boutique) throw $this->createNotFoundException('La page n\'existe pas.');
        
        if ($idB != null)
            $fndProduits = $em->getRepository('EcommerceBundle:Produits')->byBoutique($idB);
        
        $produits = $this->get('knp_paginator')->paginate($fndProduits,$this->get('request')->query->get('page', 1),15);
        
        return $this->render('EcommerceBundle:Default:boutiques/layout/presentation.html.twig', array('boutique' => $boutique,'produits' => $produits));
    }

    public function presentationBoutiquePremiumAction(BoutiquesPremium $idBP = null)
    {
        $em = $this->getDoctrine()->getManager();
        $boutiquePremium = $em->getRepository('EcommerceBundle:BoutiquesPremium')->find($idBP);
        
        if (!$boutiquePremium) throw $this->createNotFoundException('La page n\'existe pas.');
        
        
        return $this->render('EcommerceBundle:Default:boutiques/layout/presentationPremium.html.twig', array('boutiquePremium' => $boutiquePremium));
    }
    
    public function rechercheAction() 
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }
    
    public function rechercheTraitementAction() 
    {
        $request=$this->get('request');
        if ($this->get('request')->getMethod() == 'POST')
        {
            
            $em = $this->getDoctrine()->getManager();
            $boutiques = $em->getRepository('EcommerceBundle:Boutiques')->rechercheBoutiques($request->get("search"));
        } else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }
        
        return $this->render('EcommerceBundle:Default:produits/layout/produitsRecherche.html.twig', array('produits' => $boutiques));
    }
}