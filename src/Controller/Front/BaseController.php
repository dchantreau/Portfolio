<?php

namespace App\Controller\Front;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    public function user(): Response
    {
        return $this->render('front/base.html.twig',[
        'user' => $userRepository->findOneBy([]),
        ]);
    }
}