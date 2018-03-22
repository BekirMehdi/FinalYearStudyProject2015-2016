<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        $sousCategories = $em->getRepository('EcommerceBundle:SousCategories')->findAll();
        
        return $this->render('EcommerceBundle:Default:categories/modulesUsed/menu.html.twig', array('categories' => $categories,'sousCategories' => $sousCategories));
    }

    public function footerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        $boutiques = $em->getRepository('EcommerceBundle:Boutiques')->findAll();
        
        return $this->render('EcommerceBundle:Default:categories/modulesUsed/footer.html.twig', array('categories' => $categories,'boutiques' => $boutiques));
    }

        public function menuHorizontalAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        $sousCategories = $em->getRepository('EcommerceBundle:SousCategories')->findAll();
        
        return $this->render('EcommerceBundle:Default:categories/modulesUsed/menuHorizontal.html.twig', array('categories' => $categories,'sousCategories' => $sousCategories));
    }

      public function menuListeGridAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        $sousCategories = $em->getRepository('EcommerceBundle:SousCategories')->findAll();
        
        return $this->render('EcommerceBundle:Default:categories/modulesUsed/menuListeGrid.html.twig', array('categories' => $categories,'sousCategories' => $sousCategories));
    }
        public function tousCategoriesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        $sousCategories = $em->getRepository('EcommerceBundle:SousCategories')->findAll();
        
        return $this->render('EcommerceBundle:Default:categories/modulesUsed/tousCategories.html.twig', array('categories' => $categories,'sousCategories' => $sousCategories));
    }
}
