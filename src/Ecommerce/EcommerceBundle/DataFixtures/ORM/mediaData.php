<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\media;

class mediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new media();
        $media1->setAlt('Legumes');
        $media1->setPath('https://www.pcduchat.com/logo.png');
        $manager->persist($media1);
        
        $media2 = new media();
        $media2->setAlt('Fruits');
        $media2->setPath('https://www.pcduchat.com/logo.png');
        $manager->persist($media2);
        
        $media3 = new media();
        $media3->setAlt('Poivre rouge');
        $media3->setPath('https://www.pcduchat.com/logo.png');
        $manager->persist($media3);
        
        $media4 = new media();
        $media4->setAlt('Piment');
        $media4->setPath('https://www.pcduchat.com/logo.png');
        $manager->persist($media4);
        
        $media5 = new media();
        $media5->setAlt('Tomate');
        $media5->setPath('https://www.pcduchat.com/logo.png');
        $manager->persist($media5);
        
        $media6 = new media();
        $media6->setAlt('Poivron vert');
        $media6->setPath('https://www.pcduchat.com/logo.png');
        $manager->persist($media6);
        
        $media7 = new media();
        $media7->setAlt('raisin');
        $media7->setPath('https://www.pcduchat.com/logo.png');
        $manager->persist($media7);
        
        $media8 = new media();
        $media8->setAlt('Orange');
        $media8->setPath('https://www.pcduchat.com/logo.png');
        $manager->persist($media8);
        
        $manager->flush();
        
        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
    }
    public function getOrder(){
        return 1;
    }
   
}
