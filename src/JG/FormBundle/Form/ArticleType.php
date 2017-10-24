<?php

namespace JG\FormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder


            ->add('image', FileType::class, array(
//                    'label' => "Image",
                    'data_class' => null                )
            )

            ->add('titre', TextType::class, array(
                'label' => "Titre",
                'attr'  => array(
                    'placeholder' => 'de l\'article'
                )))
            ->add('article', TextareaType::class, array(
                'label' => "Article",
                'attr'  => array(
                    'placeholder' => '255 caractères maximum'
                )))
            ->add('auteur', TextType::class, array(
                'label' => "Auteur",
                'attr'  => array(
                    'placeholder' => 'votre nom ici'
                )))

            ->add('date', DateType::class, array('label' => "Date"))
            ->add('save', SubmitType::class, array('label' => 'Créer un article'))




//            ->add('date',        'date')
//            ->add('titre',       'text')
//            ->add('contenu',     'textarea')
//            ->add('auteur',      'text')
//            ->add('publication', 'checkbox', array('required' => false))
//            ->add('image',        new ImageType())

//            ->add('categories', 'collection', array('type'         => new CategorieType(),
//                'allow_add'    => true,
//                'allow_delete' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JG\FormBundle\Entity\Post'

        ));
    }

    public function getName()
    {
        return 'jg_formbundle_articletype';
    }
}
