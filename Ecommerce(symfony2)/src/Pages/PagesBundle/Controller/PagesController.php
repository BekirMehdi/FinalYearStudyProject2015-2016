<?php

namespace Pages\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Pages\PagesBundle\Entity\Commentaires;

class PagesController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $findArticles = $em->getRepository('PagesBundle:Articles')->findAll();
         $articles = $this->get('knp_paginator')->paginate($findArticles,$this->get('request')->query->get('page', 1),3);
        return $this->render('PagesBundle:Default:pages/layout/articles.html.twig', array('articles' => $articles));
    }

    public function menuHorizontalAction()
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('PagesBundle:Articles')->findAll();
         
        return $this->render('PagesBundle:Default:pages/modulesUsed/menuHorizontal.html.twig', array('articles' => $articles));
    }

    public function pageAction($id , Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Articles = $em->getRepository('PagesBundle:Articles')->findAll();
        $articles = $em->getRepository('PagesBundle:Articles')->find($id);
        if($request->getMethod()=='POST'){
            $nom=$request->get('nom'); 
            $email=$request->get('email');            
            $commentaire=$request->get('commentaire');
            
            $commentaires= new Commentaires();
            $commentaires->setDateCreation(new \DateTime());
            $commentaires->setIdArticle($id);
            $commentaires->setNom($nom);
            $commentaires->setEmail($email);
            $commentaires->setCommentaire($commentaire);
            

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($commentaires);
            $em->flush();
            
        }

        $commentaires = $em->getRepository('PagesBundle:Commentaires')->findBy(array('id_article' => $id));
        if (!$articles) throw $this->createNotFoundException('La page n\'existe pas.');
        
        return $this->render('PagesBundle:Default:pages/layout/pages.html.twig', array('articles' => $articles,'Articles' => $Articles,'commentaires' => $commentaires));
    }



}
