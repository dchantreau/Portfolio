<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/accueil', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('front/accueil.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
