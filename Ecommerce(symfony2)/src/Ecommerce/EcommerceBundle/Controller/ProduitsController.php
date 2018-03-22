<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Ecommerce\EcommerceBundle\Entity\Categories;
use Ecommerce\EcommerceBundle\Entity\SousCategories;
use Ecommerce\EcommerceBundle\Entity\Boutiques;

class ProduitsController extends Controller
{  
    public function acceuilAction(Categories $categorie = null )
    {

        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        if ($categorie != null)
            $findProduits = $em->getRepository('EcommerceBundle:Produits')->byCategorie($categorie);
        else 
            $findProduits = $em->getRepository('EcommerceBundle:Produits')->findAll();
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        $sousCategories = $em->getRepository('EcommerceBundle:SousCategories')->findAll();
        $articles = $em->getRepository('PagesBundle:Articles')->findAll();
        $produits = $this->get('knp_paginator')->paginate($findProduits,$this->get('request')->query->get('page', 1),300);
        
        return $this->render('EcommerceBundle:Default:produits/layout/acceuil.html.twig', array('produits' => $produits,'sousCategories' => $sousCategories,'panier' => $panier,'articles' => $articles));
    }    
     public function sousCategorieGridAction(SousCategories $sousCategorieGrid = null )
    {

        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        if ($sousCategorieGrid != null)
        {
            $findProduits = $em->getRepository('EcommerceBundle:Produits')->bySousCategorie($sousCategorieGrid);
            $sousCategorie = $em->getRepository('EcommerceBundle:SousCategories')->find($sousCategorieGrid);
            $sousCategories = $em->getRepository('EcommerceBundle:SousCategories')->findAll();
            $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        }    
        else 
            $findProduits = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => 1));
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        $produits = $this->get('knp_paginator')->paginate($findProduits,$this->get('request')->query->get('page', 1),9);
        
        return $this->render('EcommerceBundle:Default:produits/layout/categorieProduitsGrid.html.twig', array('produits' => $produits, 'panier' => $panier,'sousCategorie' => $sousCategorie,'categories' => $categories,'sousCategories' => $sousCategories));
    }    

         public function sousCategorieListeAction(SousCategories $sousCategorieListe = null )
    {

        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        if ($sousCategorieListe != null)
        {
            $findProduits = $em->getRepository('EcommerceBundle:Produits')->bySousCategorie($sousCategorieListe);
            $sousCategorie = $em->getRepository('EcommerceBundle:SousCategories')->find($sousCategorieListe);
            $sousCategories = $em->getRepository('EcommerceBundle:SousCategories')->findAll();
            $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        }    
        else 
            $findProduits = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => 1));
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        $produits = $this->get('knp_paginator')->paginate($findProduits,$this->get('request')->query->get('page', 1),4);
        
        return $this->render('EcommerceBundle:Default:produits/layout/categorieProduitsListe.html.twig', array('produits' => $produits,'panier' => $panier,'sousCategorie' => $sousCategorie,'categories' => $categories,'sousCategories' => $sousCategories));
    }  

      public function produitVerticalAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produitsPremium = $em->getRepository('EcommerceBundle:ProduitsPremium')->findAll();
        
        return $this->render('EcommerceBundle:Default:produits/layout/produitsVertical.html.twig', array('produitsPremium' => $produitsPremium));
    }

    public function presentationAction($id)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);

        $produits = $em->getRepository('EcommerceBundle:Produits')->findBy(array('categorie_Produit' => $produit->getCategorieProduit()));
        
        if (!$produit) throw $this->createNotFoundException('La page n\'existe pas.');
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig', array('produits' => $produits,'produit' => $produit,
                                                                                                     'panier' => $panier));
    }

      public function presentationPremiumAction($idP)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $produitPemium = $em->getRepository('EcommerceBundle:ProduitsPremium')->find($idP);

        $produitsPremium = $em->getRepository('EcommerceBundle:Produits')->findBy(array('categorie_Produit' => $produitPemium->getCategorieProduit()));
        
        if (!$produitPemium) throw $this->createNotFoundException('La page n\'existe pas.');
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        return $this->render('EcommerceBundle:Default:produits/layout/presentationPremium.html.twig', array('produitsPremium' => $produitsPremium,'produitPemium' => $produitPemium,
                                                                                                     'panier' => $panier));
    }
    
    public function rechercheAction() 
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }
    
    public function page404Action() 
    {
        throw $this->createNotFoundException('La page n\'existe pas.');
    }

    public function rechercheTraitementAction() 
    {
        $request=$this->get('request');
        if ($this->get('request')->getMethod() == 'POST')
        {
            $test=$request->get("choix");
            $test1=$request->get("choix1");
            $em = $this->getDoctrine()->getManager();

            if($test=='produits'){
            $produits = $em->getRepository('EcommerceBundle:Produits')->rechercheProduits($request->get("search"),$test1);
            return $this->render('EcommerceBundle:Default:produits/layout/produitsRecherche.html.twig', array('produits' => $produits));
            }
             
            else if ($test=='boutiques'){
            $boutiques = $em->getRepository('EcommerceBundle:Boutiques')->rechercheBoutiques($request->get("search"));
                return $this->render('EcommerceBundle:Default:boutiques/layout/boutiquesRecherche.html.twig', array('boutiques' => $boutiques));
            }
        }
         else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }
        
        
    }
}