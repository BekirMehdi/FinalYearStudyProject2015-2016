<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\EcommerceBundle\Entity\ContactUs;

class ContactUsController extends Controller
{  
    public function contactUsAction(Request $request)
    {
   
        if($request->getMethod()=='POST'){
            $firstName=$request->get('firstName'); 
            $email=$request->get('email');
            $compagnie=$request->get('compagnie');                        
            $telephone=$request->get('telephone');
            $adresse=$request->get('adresse');
            $commentaire=$request->get('commentaire');
            $user = $this->getUser();
            if(is_object($user) || $user instanceof UserInterface){
            $contactUs= new ContactUs();
            $contactUs->setFirstName($firstName);
            $contactUs->setEmail($email);
            $contactUs->setCompagnie($compagnie);
            $contactUs->setTelephone($telephone);
            $contactUs->setAdresse($adresse);
            $contactUs->setCommentaire($commentaire);
        
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($contactUs);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success','Message envoyé avec succès');
             }
            else{
                $this->get('session')->getFlashBag()->add('success','Vous devez vous identifier');
                return $this->redirect($this->generateUrl('fos_user_security_login'));
            }
        }
          return $this->render('EcommerceBundle:Default:contactUs/layout/contactUs.html.twig');
    }

    public function messagesAction() 
    {
        $em = $this->getDoctrine()->getManager();
        $messages = $em->getRepository('EcommerceBundle:ContactUs')->findAll();
        
        return $this->render('EcommerceBundle:SuperAdministration:Messages/layout/index.html.twig', array('messages' => $messages));
    }

        public function aboutUsAction()
    {   
        return $this->render('EcommerceBundle:Default:aboutUs/layout/aboutUs.html.twig');
    }
}