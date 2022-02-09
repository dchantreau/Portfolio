<?php

namespace App\Controller\Front;

use App\Entity\Visiteur;
use App\Form\VisiteurType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VisiteurController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(UserRepository $userRepository, Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $contact = new Visiteur();
        $form = $this->createForm(VisiteurType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contact);
            $entityManager->flush();

            $email = (new Email())
            ->from($request->get("contact")["mail"])
            ->to($admin->getEmail())
            ->subject('Vous avez reçu un nouvel email de Chantreau Damien')
            ->html($this->renderView('front/contact.html.twig', ['contact' => $contact]));
            $mailer->send($email);

            $this->addFlash('Excellent', 'Votre message a bien été envoyé!');
            return $this->redirectToRoute('contact', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/contact.html.twig', [
            'form' => $form,
            'user' => $userRepository->findOneBy([]),
        ]);
    }
}
