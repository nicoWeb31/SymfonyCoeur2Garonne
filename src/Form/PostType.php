<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null ,[
                'label'=>'Titre'
            ])
            ->add('subtitle', null ,[
                'label'=>'Soustitre'
            ])
            ->add('content', null ,[
                'label'=>'Contenu'
            ])
            //->add('createdAt')
            // ->add('category', ChoiceType::class,[
            //     'choices' => 
            // ])
            // //->add('photo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
