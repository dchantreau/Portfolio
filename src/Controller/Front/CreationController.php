<?php

namespace App\Controller\Front;


use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreationController extends AbstractController
{
    #[Route('/creation', name: 'creation')]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('front/creation.html.twig', [
            'controller_name' => 'CreationController',
            'user' => $userRepository->findOneBy([]),
        ]);
    }
}
