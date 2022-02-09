<?php

namespace App\DataFixtures;

use App\Entity\Creation;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CreationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $creation = new Creation();
         $creation->setNom("Truckmuche");
         $creation->setImage("codeur.gif");

         $manager->persist($creation);

        $manager->flush();
    }
}
