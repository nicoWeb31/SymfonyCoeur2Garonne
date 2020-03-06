<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\RegistrationType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_register")
     */
    public function register()
    {
        $user = new Users;
        $form = $this->createForm(RegistrationType::class, $user);
        // dd($form);
        return $this->render('security/register.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
