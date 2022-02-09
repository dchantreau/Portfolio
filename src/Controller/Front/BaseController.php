<?php

namespace App\Controller\Front;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    public function user(UserRepository $userRepository): Response
    {
        return $this->render('front/base.html.twig',[
        'user' => $userRepository->findOneBy([]),
        ]);
    }
}