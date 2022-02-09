<?php

namespace App\Controller\Front;


use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExperienceController extends AbstractController
{
    #[Route('/experience', name: 'experience')]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('front/experience.html.twig', [
            'controller_name' => 'ExperienceController',
            'user' => $userRepository->findOneBy([]),
        ]);
    }
}
