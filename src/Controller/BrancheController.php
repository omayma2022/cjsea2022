<?php

namespace App\Controller;

use App\Entity\Branche;
use App\Form\BrancheType;
use App\Repository\BrancheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/branche')]
class BrancheController extends AbstractController
{
    #[Route('/', name: 'branche_index', methods: ['GET'])]
    public function index(BrancheRepository $brancheRepository): Response
    {
        return $this->render('branche/index.html.twig', [
            'branches' => $brancheRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'branche_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $branche = new Branche();
        $form = $this->createForm(BrancheType::class, $branche);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($branche);
            $entityManager->flush();

            return $this->redirectToRoute('branche_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('branche.html.twig', [
            'branche' => $branche,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'branche_show', methods: ['GET'])]
    public function show(Branche $branche): Response
    {
        return $this->render('branche/show.html.twig', [
            'branche' => $branche,
        ]);
    }

    #[Route('/{id}/edit', name: 'branche_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Branche $branche, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BrancheType::class, $branche);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('branche_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('branche/edit.html.twig', [
            'branche' => $branche,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'branche_delete', methods: ['POST'])]
    public function delete(Request $request, Branche $branche, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$branche->getId(), $request->request->get('_token'))) {
            $entityManager->remove($branche);
            $entityManager->flush();
        }

        return $this->redirectToRoute('branche_index', [], Response::HTTP_SEE_OTHER);
    }
}
