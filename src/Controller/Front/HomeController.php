<?php

namespace App\Controller\Front;


use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('front/accueil.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $userRepository->findOneBy([]),
        ]);
    }
}
