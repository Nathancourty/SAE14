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
    /**
     * @Route("/cv.html.twig", name="cv")
     */
    public function cv()
    {
        return $this->render('cv.html.twig', [
            'title' => 'cv',
        ]);
    }
    /**
     * @Route("/formulaire.html.twig", name="formulaire")
     */
    public function formulaire()
    {
        return $this->render('formulaire.html.twig', [
            'title' => 'formulaire',
        ]);
    }
     /**
     * @Route("/administrer.html.twig", name="administrer")
     */
    public function administrer()
    {
        return $this->render('administrer.html.twig', [
            'title' => 'administrer',
        ]);
    } 
     /**
     * @Route("/connecter.html.twig", name="connecter")
     */
    public function connecter()
    {
        return $this->render('connecter.html.twig', [
            'title' => 'conncter',
        ]);
    } 
     /**
     * @Route("/programmer.html.twig", name="programmer")
     */
    public function programmer()
    {
        return $this->render('programmer.html.twig', [
            'title' => 'programmer',
        ]);
    }
     /**
     * @Route("/loisir.html.twig", name="loisir")
     */
    public function loisir()
    {
        return $this->render('loisir.html.twig', [
            'title' => 'loisir',
        ]);
    }    
}