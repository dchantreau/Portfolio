<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExperienceController extends AbstractController
{
    #[Route('/experience', name: 'experience')]
    public function index(): Response
    {
        return $this->render('front/experience.html.twig', [
            'controller_name' => 'ExperienceController',
        ]);
    }
}
