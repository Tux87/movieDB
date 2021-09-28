<?php

namespace App\Controller\Backoffice;

use App\Entity\Season;
use App\Form\Season1Type;
use App\Repository\SeasonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backoffice/season")
 */
class SeasonController extends AbstractController
{
    /**
     * @Route("/", name="backoffice_season_index", methods={"GET"})
     */
    public function index(SeasonRepository $seasonRepository): Response
    {
        return $this->render('backoffice/season/index.html.twig', [
            'seasons' => $seasonRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="backoffice_season_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $season = new Season();
        $form = $this->createForm(Season1Type::class, $season);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($season);
            $entityManager->flush();

            return $this->redirectToRoute('backoffice_season_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backoffice/season/new.html.twig', [
            'season' => $season,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="backoffice_season_show", methods={"GET"})
     */
    public function show(Season $season): Response
    {
        return $this->render('backoffice/season/show.html.twig', [
            'season' => $season,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="backoffice_season_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Season $season): Response
    {
        $form = $this->createForm(Season1Type::class, $season);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('backoffice_season_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backoffice/season/edit.html.twig', [
            'season' => $season,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="backoffice_season_delete", methods={"POST"})
     */
    public function delete(Request $request, Season $season): Response
    {
        if ($this->isCsrfTokenValid('delete'.$season->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($season);
            $entityManager->flush();
        }

        return $this->redirectToRoute('backoffice_season_index', [], Response::HTTP_SEE_OTHER);
    }
}
