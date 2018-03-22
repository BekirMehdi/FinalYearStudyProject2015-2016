<?php
namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adresse1 = new UtilisateursAdresses();
        $adresse1->setUtilisateur($this->getReference('utilisateur1'));
        $adresse1->setNom('Mehdi');
        $adresse1->setPrenom('Bekir');
        $adresse1->setTelephone('50390251');
        $adresse1->setAdresse('Cite Jala');
        $adresse1->setCp('7000');
        $adresse1->setPays('Tunisie');
        $adresse1->setVille('Bizerte');
        $adresse1->setComplement('cite wali');
        $manager->persist($adresse1);
        
        $adresse2 = new UtilisateursAdresses();
        $adresse2->setUtilisateur($this->getReference('utilisateur3'));
        $adresse2->setNom('Mehdi');
        $adresse2->setPrenom('Bekir');
        $adresse2->setTelephone('50390251');
        $adresse2->setAdresse('Cite Jala');
        $adresse2->setCp('7000');
        $adresse2->setPays('Tunisie');
        $adresse2->setVille('Bizerte');
        $adresse2->setComplement('cite wali');
        $manager->persist($adresse2);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 6;
    }
}