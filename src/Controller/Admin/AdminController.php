<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController{

    /**
     * @var PostRepository
     */
    private $repo;


    public function __construct(PostRepository $repository)
    {
        $this->repo = $repository;

    }

    /**
     * @Route("/admin/post",requirements={"id":"\d+"}, name="admin.post.all")
     */
    public function index(){

        $allPost  = $this->repo ->findAll();
        
        return $this->render('admin/editPostAll.html.twig', compact('allPost'));
    }


    /**
     * @Route("/admin/post/{id}",requirements={"id":"\d+"}, name="admin.post.edit", methods={"GET","POST"})
     */
    public function edit(Post $post,Request $req,EntityManagerInterface $em)//:Response
    {
        $form = $this->createForm(PostType::class , $post);
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid()){
            
            $em->flush();
            return $this->redirectToRoute('admin.post.all');
        }

        return $this->render('admin/editPostOne.html.twig',[
            'post'=> $post,
            'form'=>$form->createView()
        ]);
    }

}

