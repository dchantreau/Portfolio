<?php

namespace App\Controller\Admin;

use App\Entity\Portrait;
use App\Form\PortraitType;
use App\Repository\PortraitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('admin/portrait')]
class PortraitController extends AbstractController
{
    #[Route('/', name: 'portrait_index', methods: ['GET'])]
    public function index(PortraitRepository $portraitRepository): Response
    {
        return $this->render('admin/portrait/index.html.twig', [
            'portrait' => $portraitRepository->findOneBy([]),
        ]);
    }

    #[Route('/{id}/edit', name: 'portrait_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Portrait $portrait, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PortraitType::class, $portrait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('portrait_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/portrait/edit.html.twig', [
            'portrait' => $portrait,
            'form' => $form,
        ]);
    }
}
