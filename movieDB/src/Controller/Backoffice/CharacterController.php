<?php

namespace App\Controller\Backoffice;

use App\Entity\Character;
use App\Form\Character1Type;
use App\Repository\CharacterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backoffice/character")
 */
class CharacterController extends AbstractController
{
    /**
     * @Route("/", name="backoffice_character_index", methods={"GET"})
     */
    public function index(CharacterRepository $characterRepository): Response
    {
        return $this->render('backoffice/character/index.html.twig', [
            'characters' => $characterRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="backoffice_character_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $character = new Character();
        $form = $this->createForm(Character1Type::class, $character);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($character);
            $entityManager->flush();

            return $this->redirectToRoute('backoffice_character_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backoffice/character/new.html.twig', [
            'character' => $character,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="backoffice_character_show", methods={"GET"})
     */
    public function show(Character $character): Response
    {
        return $this->render('backoffice/character/show.html.twig', [
            'character' => $character,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="backoffice_character_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Character $character): Response
    {
        $form = $this->createForm(Character1Type::class, $character);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('backoffice_character_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backoffice/character/edit.html.twig', [
            'character' => $character,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="backoffice_character_delete", methods={"POST"})
     */
    public function delete(Request $request, Character $character): Response
    {
        if ($this->isCsrfTokenValid('delete'.$character->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($character);
            $entityManager->flush();
        }

        return $this->redirectToRoute('backoffice_character_index', [], Response::HTTP_SEE_OTHER);
    }
}
