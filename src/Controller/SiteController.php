<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="site")
     */
    public function index()
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }


    /**
     * @Route("/trail", name="trail")
     */
    public function trail()
    {
        return $this->render('post/trail.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/treck", name="treck")
     */
    public function treck()
    {
        return $this->render('post/treck.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/vtt", name="vtt")
     */
    public function vtt()
    {
        return $this->render('post/vtt.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }


    /**
     * @Route("/actu", name="actu")
     */
    public function actu()
    {
        return $this->render('post/actu.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/evenement", name="event")
     */
    public function event()
    {
        return $this->render('site/event.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/adhesion", name="adhesion")
     */
    public function adhesion()
    {
        return $this->render('site/adhesion.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }
}
