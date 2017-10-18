<?php

namespace JG\FormBundle\Controller;

use JG\FormBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $article = new Post();
        $article->setDate(new \DateTime('today'));
        ;


        $form = $this->createFormBuilder($article)
            ->add('image', FileType::class, array('label' => "Image"))
//            ->add('image', FileType::class, array('label' => "Image"))
//            ->add('image', 'file')
            ->add('titre', TextType::class, array('label' => "Titre"))
            ->add('article', TextareaType::class, array('label' => "Article"))
            ->add('auteur', TextType::class, array('label' => "Auteur"))
            ->add('date', DateType::class, array('label' => "Date"))
            ->add('save', SubmitType::class, array('label' => 'Créer un article'))
            ->getForm();

        if ($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();


            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée');
            return $this->redirectToRoute('jg_form_valid');
//            return $this->redirectToRoute('jg_form_valid', array('id' => $article->getId()));
//                return $this->render("JGFormBundle:Default:valid.html.twig", array(
//                    'titre' => $titre,
//                    ));
            }
        }

        return $this->render('JGFormBundle:Default:index.html.twig', array(
            'form' => $form->createView(),

        ));
    }



public function validAction()

{
    $article = $this->getDoctrine()->getRepository('JGFormBundle:Post')->findAll();
    return $this->render('JGFormBundle:Default:valid.html.twig', array('articles' => $article));


      }
}
