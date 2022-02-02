<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationController extends AbstractController
{
    #[Route('/creation', name: 'creation')]
    public function index(): Response
    {
        return $this->render('front/creation.html.twig', [
            'controller_name' => 'CreationController',
        ]);
    }
}
