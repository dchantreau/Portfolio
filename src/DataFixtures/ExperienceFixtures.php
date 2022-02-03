<?php

namespace App\DataFixtures;

use App\Entity\Experience;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ExperienceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $experience = new Experience();
        $experience->setTexte("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $experience->setPhoto("codeur.gif");

        $manager->persist($experience);

        $manager->flush();
    }
}
