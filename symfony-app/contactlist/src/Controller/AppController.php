<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Form\Entity\EntityitemType;

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
        $item = new Contact();
        $form = $this->createForm(EntityitemType::class, $item);

        return $this->renderForm('entity/new.html.twig', [
            'form' => $form,
        ]);
    }

    public function create(Request $request): Response
    {
        $item = new Contact();
        $form = $this->createForm(EntityitemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // d('valid');exit;
            // ... do your form processing, like saving the Task and Tag entities
        }
        
        return $this->renderForm('entity/new.html.twig', [
            'form' => $form,
        ]);
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
