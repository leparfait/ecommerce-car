<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\categories;

class categoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categories1 = new categories();
        $categories1->setNom('Legumes');
        $categories1->setImage($this->getReference('media1'));
        $manager->persist($categories1);
        
        $categories2 = new categories();
        $categories2->setNom('Fuits');
        $categories2->setImage($this->getReference('media2'));
        $manager->persist($categories2);
        
        $manager->flush();
       
        $this->addReference('categories1', $categories1);
        $this->addReference('categories2', $categories2);
    }
    public function getOrder(){
        return 2;
    }
   
}
