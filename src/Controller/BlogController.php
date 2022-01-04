<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'title' => 'index',
        ]);
    }

    /**
     * @Route("/portfolio.html.twig", name="portfolio")
     */
    public function portfolio()
    {
        return $this->render('portfolio.html.twig', [
            'title' => 'portfolio',
        ]);
    }

     /**
     * @Route("/accueil.html.twig", name="accueil")
     */
    public function accueil()
    {
        return $this->render('accueil.html.twig', [
            'title' => 'accueil',
        ]);
    }
}  