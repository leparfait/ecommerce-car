<?php
namespace Ecommmerce\EcommerceBundle\Service;

use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


 Class getFacture
{
    public function  __construct(ContainerInterface $container )
    {
        $this->container = $container;
    }

    public function facture($facture)
    {
     $html = $this->container->get('templating')->render('UtilisateursBundle:Default:layout/facturePDF.html.twig', array('facture' => $facture));
     
        $html2pdf = new \Html2Pdf_Html2Pdf('p','A4','fr');
        $html2pdf->pdf->setAuteur('AureyShop');
        $html2pdf->pdf->setTitle('facture'.$facture->getReference());
        $html2pdf->pdf->setSubjet('Facture AureyShop');
        $html2pdf->pdf->setKeywords('facture','aureyShop');
        $html2pdf->pdf->setDisplayMode('real');
        $html2pdf->writeHTML($html);
       
        return $html2pdf;      
    }
}