<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TvShowController extends AbstractController
{
    /**
     * @Route("/tv/show", name="tv_show")
     */
    public function index(): Response
    {
        return $this->render('tv_show/index.html.twig', [
            'controller_name' => 'TvShowController',
        ]);
    }
}
