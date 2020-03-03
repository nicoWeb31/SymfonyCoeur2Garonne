<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * this->render methode de abstractController retourn vue de type reponse
     * @Route("/", name="site")
     */
    public function index():Response
    {
        return $this->render('site/index.html.twig');
    }


    /**
     * @Route("/trail", name="trail")
     */
    public function trail():response
    {
        return $this->render('post/trail.html.twig');
    }

    /**
     * @Route("/treck", name="treck")
     */
    public function treck():response
    {
        return $this->render('post/treck.html.twig');
    }

    /**
     * @Route("/vtt", name="vtt")
     */
    public function vtt():response
    {
        return $this->render('post/vtt.html.twig');
    }


    /**
     * @Route("/actu", name="actu")
     */
    public function actu():response
    {
        return $this->render('post/actu.html.twig');
    }

    /**
     * @Route("/evenement", name="event")
     */
    public function event():response
    {
        return $this->render('site/event.html.twig');
    }

    /**
     * @Route("/adhesion", name="adhesion")
     */
    public function adhesion():response
    {
        return $this->render('site/adhesion.html.twig');
    }
}
