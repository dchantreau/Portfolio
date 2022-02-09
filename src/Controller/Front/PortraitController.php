<?php

namespace App\Controller\Front;


use App\Repository\UserRepository;
use App\Repository\PortraitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PortraitController extends AbstractController
{
    #[Route('/portrait', name: 'portrait')]
    public function index(UserRepository $userRepository, PortraitRepository $portraitRepository): Response
    {
        return $this->render('front/portrait.html.twig', [
            'controller_name' => 'PortraitController',
            'user' => $userRepository->findOneBy([]),
            'portrait' => $portraitRepository->findOneBy([]),
        ]);
    }
}