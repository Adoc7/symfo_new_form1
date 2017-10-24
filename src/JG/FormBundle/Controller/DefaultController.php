<?php

namespace JG\FormBundle\Controller;

use JG\FormBundle\Entity\Post;
use JG\FormBundle\Form\ArticleType;
use JG\FormBundle\Form\ArticleEditType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class DefaultController extends Controller
{



    public function indexAction(Request $request)
{
    $article= new Post;
    $form=$this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){


            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $request->get('session')->getFlashBag()->add('info','Article bien ajouté');
            return $this->redirectToRoute('jg_form_valid', array('id' => $article->getId()));

        }


return $this->render('JGFormBundle:Default:index.html.twig', array(
            'form' => $form->createView(),

        ));

}



//    public function indexAction(Request $request)
//    {
//
//        // create a task and give it some dummy data for this example
//        $article = new Post();
//        $article->setDate(new \DateTime('today'));
//        ;
//
//
//        $form = $this->createFormBuilder($article)
//            ->add('image', FileType::class, array(
//                'label' => "Image",
//                )
//            )
//
//            ->add('titre', TextType::class, array(
//                'label' => "Titre",
//                'attr'  => array(
//                    'placeholder' => 'de l\'article'
//                )))
//            ->add('article', TextareaType::class, array(
//                'label' => "Article",
//                'attr'  => array(
//                    'placeholder' => '255 caractères maximum'
//                )))
//            ->add('auteur', TextType::class, array(
//                'label' => "Auteur",
//                'attr'  => array(
//                    'placeholder' => 'votre nom ici'
//                )))
//
//            ->add('date', DateType::class, array('label' => "Date"))
//            ->add('save', SubmitType::class, array('label' => 'Créer un article'))
//            ->getForm();
//
//        if ($request->isMethod('POST')){
//            $form->handleRequest($request);
//            if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($article);
//            $em->flush();
//
//            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée');
//            return $this->redirectToRoute('jg_form_valid', array('id' => $article->getId()));
//
//            }
//        }
//
//        return $this->render('JGFormBundle:Default:index.html.twig', array(
//            'form' => $form->createView(),
//
//        ));


    public function validAction()

{
    $article = $this->getDoctrine()->getRepository('JGFormBundle:Post')->findAll();

    return $this->render('JGFormBundle:Default:valid.html.twig', array('articles' => $article));


      }


    public function editAction(Request $request, Post $post, $id)
       {
           $form=$this->createForm(ArticleType::class, $post);

           $form->handleRequest($request);


           if ($form->isSubmitted() && $form->isValid()) {
               // On enregistre l'article
               $em = $this->getDoctrine()->getManager();
               $em->flush();

               // On définit un message flash
               $this->get('session')->getFlashBag()->add('info', 'Article bien modifié');

               return $this->redirectToRoute('jg_form_valid', array('id' => $post->getId()));

           }

           return $this->render('JGFormBundle:Default:index.html.twig', array(
           'form' => $form->createView(),
               'post' => $post


           ));

}





    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $articleSuppr=$em->getRepository("JGFormBundle:Post")->find($id);
        if (!$articleSuppr){
            throw $this-> createNotFoundException("Pas d'article trouvé pour cet id" .$id);
        }

        $em->remove($articleSuppr);
        $em->flush();
        return $this->redirectToRoute('jg_form_valid', array('id' => $articleSuppr->getId()));

    }







}
