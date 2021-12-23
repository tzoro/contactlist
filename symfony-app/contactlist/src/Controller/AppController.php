<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AppController extends AbstractController
{
    /**
     * @Route("/app", name="app")
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Contact::class);
        $items = $repository->findAll();

        return $this->render('entity/index.html.twig', [
            'items' => $items,
        ]);
    }

    public function edit(): Response
    {
        return $this->render('entity/edit.html.twig');
    }

    public function new(): Response
    {
        $task = new Contact();

        $form = $this->createFormBuilder($task)
            ->setAction($this->generateUrl('create'))
            ->setMethod('POST')
            ->add('FirstName', TextType::class)
            ->add('LastName', TextType::class)
            ->add('Photo', FileType::class)
            ->add('Favourite', CheckboxType::class)
            ->add('save', SubmitType::class, ['label' => 'Save'])
            ->getForm();

        return $this->renderForm('entity/new.html.twig', [
            'form' => $form,
        ]);
    }

    public function create(): Response
    {
      // $entityManager = $this->getDoctrine()->getManager();
      // $repo = new Contact();
      // $repo->setFirstName('tzoro');
      
      // $entityManager->persist($repo);
      // $entityManager->flush();
    }

    public function read(int $id): Response
    {
        $repository = $this->getDoctrine()->getRepository(Contact::class);
        $entity = $repository->findOneBy([
            'id' => $id
        ]);

        return $this->render('entity/show.html.twig', [
            'entity' => $entity
        ]);
    }

    public function update(): Response
    {

    }

    public function delete(): Response
    {

    }
}
