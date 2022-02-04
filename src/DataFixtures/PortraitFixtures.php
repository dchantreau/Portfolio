<?php

namespace App\DataFixtures;

use App\Entity\Portrait;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PortraitFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $portrait = new Portrait();
        $portrait->setPhoto("codeur.gif");
        $portrait->setTexte("Lorem ipsum dolor sit amet, consectetur adipiscing elit.");

        $manager->persist($portrait);

        $manager->flush();
    }
}
