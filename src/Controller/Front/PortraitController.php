<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortraitController extends AbstractController
{
    #[Route('/portrait', name: 'portrait')]
    public function index(): Response
    {
        return $this->render('front/portrait.html.twig', [
            'controller_name' => 'PortraitController',
        ]);
    }
}