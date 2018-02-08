<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\commandes;

class commmandesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        
        $commandes1 = new commandes();
        $commandes1->setUtilisateur($this->getReference('utilisateur1'));
        $commandes1->setDate(new \DateTime);
        $commandes1->setValider('1');
        $commandes1->setReference('1');
        $commandes1->setProduits(array('0'=>array('1'=>'2'),
                                       '1'=>array('2'=>'1'),
                                       '2'=>array('4'=>'5')
                                
                                 ));
        $manager->persist($commandes1);
        
        $commandes2 = new commandes();
        $commandes2->setUtilisateur($this->getReference('utilisateur2'));
        $commandes2->setDate(new \DateTime);
        $commandes2->setValider('1');
        $commandes2->setReference('2');
        $commandes2->setProduits(array('0'=>array('1'=>'2'),
                                       '1'=>array('2'=>'1'),
                                       '2'=>array('4'=>'5')
                                
                                 ));
        $manager->persist($commandes2);
        
        $manager->flush();
        
    }
    public function getOrder(){
        return 7;
    }
   
}
