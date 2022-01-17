<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $con = new Contact();

        $con ->getNomContact()
            ->getTelContact()
            ->setSujetContact()
            ->setMessage();


        $manager->flush();
    }
}
