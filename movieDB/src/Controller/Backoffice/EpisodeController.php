<?php

namespace App\Controller\Backoffice;

use App\Entity\Episode;
use App\Form\Episode1Type;
use App\Repository\EpisodeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backoffice/episode")
 */
class EpisodeController extends AbstractController
{
    /**
     * @Route("/", name="backoffice_episode_index", methods={"GET"})
     */
    public function index(EpisodeRepository $episodeRepository): Response
    {
        return $this->render('backoffice/episode/index.html.twig', [
            'episodes' => $episodeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="backoffice_episode_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $episode = new Episode();
        $form = $this->createForm(Episode1Type::class, $episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($episode);
            $entityManager->flush();

            return $this->redirectToRoute('backoffice_episode_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backoffice/episode/new.html.twig', [
            'episode' => $episode,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="backoffice_episode_show", methods={"GET"})
     */
    public function show(Episode $episode): Response
    {
        return $this->render('backoffice/episode/show.html.twig', [
            'episode' => $episode,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="backoffice_episode_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Episode $episode): Response
    {
        $form = $this->createForm(Episode1Type::class, $episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('backoffice_episode_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backoffice/episode/edit.html.twig', [
            'episode' => $episode,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="backoffice_episode_delete", methods={"POST"})
     */
    public function delete(Request $request, Episode $episode): Response
    {
        if ($this->isCsrfTokenValid('delete'.$episode->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($episode);
            $entityManager->flush();
        }

        return $this->redirectToRoute('backoffice_episode_index', [], Response::HTTP_SEE_OTHER);
    }
}
