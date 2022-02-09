<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
         $user = new User();
         $user->setAge(27);
         $user->setUsername("Chantreau Damien");
         $user->setPhoto("codeur.gif");
         $user->setMail("Chantreaudamien@gmail.com");
         $user->setLinkedin("https://www.linkedin.com/in/damien-chantreau");
         $user->setGithub("https://github.com/dchantreau");
         $user->setRoles(['ROLE_ADMIN']);
         $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            'admin'
        );
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $manager->flush();
    }
}
