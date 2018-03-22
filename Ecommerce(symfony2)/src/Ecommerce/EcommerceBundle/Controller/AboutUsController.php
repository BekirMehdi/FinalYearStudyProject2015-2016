<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbouttUsController extends Controller
{  

    public function aboutUsAction()
    {   
        return $this->render('EcommerceBundle:Default:aboutUs/layout/aboutUs.html.twig');
    }
}