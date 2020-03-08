<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Category;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{

    private $repo;

    public function __construct(PostRepository $repo)
    {
        $this->repo = $repo;
    }


    /**
     * this->render methode de abstractController retourn vue de type reponse
     * @Route("/", name="site")
     */
    public function index():Response
    {
        return $this->render('site/index.html.twig');
    }


    /**
     * @Route("/post/trail", name="trail")
     */
    public function trail():response
    {
        $TrailPost = $this->repo->findBy(['category' =>26]);
        // dd($TrailPost);
        return $this->render('post/trail.html.twig',compact('TrailPost'));
    }

    /**
     * @Route("/post/treck", name="treck")
     */
    public function treck():response
    {
        $postTreck = $this->repo->findBy(['category' => 27]);
        return $this->render('post/treck.html.twig',compact('postTreck'));
    }

    /**
     * @Route("/post/vtt", name="vtt")
     */
    public function vtt():response
    {
        $VttPost = $this->repo->findBy(['category' =>29]);
        return $this->render('post/vtt.html.twig',compact('VttPost'));
    }


    /**
     * @Route("/post/actu", name="actu")
     */
    public function actu():response
    {
        $postActu = $this->repo->findBy(['category'=>28]);
        return $this->render('post/actu.html.twig',compact('postActu'));
    }


    /**
     * @Route("/post/show/{id}",requirements={"id":"\d+"}, name="post.show")
     */
    public function show(int $id):Response
    {
        $postOne = $this->repo->find($id);
        return $this->render('post/show.html.twig',compact('postOne'));
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
