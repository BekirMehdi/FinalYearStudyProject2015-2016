<?php
namespace Ecommerce\EcommerceBundle\Services;

use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GetAide
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    
    public function aide()
    {
        $html = $this->container->get('templating')->render('UtilisateursBundle:Default:layout/aidePDF.html.twig');
        
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
        $html2pdf->pdf->SetAuthor('EBoutique');
        $html2pdf->pdf->SetTitle('Aide '.'EBoutique');
        $html2pdf->pdf->SetSubject('Aide EBoutique');
        $html2pdf->pdf->SetKeywords('aide,eboutique');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        
        return $html2pdf;
    }
}