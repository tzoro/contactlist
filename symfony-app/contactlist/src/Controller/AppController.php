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
    public function index(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Contact::class);

        if( $request->get('fav') == '1' ) {
            $items = $repository->findBy(['Favourite' => true]); 
        } else {
            $items = $repository->findAll();
        }

        return $this->render('entity/index.html.twig', [
            'items' => $items,
        ]);
    }

    public function edit(int $id): Response
    {
        $item = new Contact();
        $repository = $this->getDoctrine()->getRepository(Contact::class);

        $entity = $repository->findOneBy([
            'id' => $id
        ]);
        $form = $this->createForm(EntityitemType::class, $entity);

        return $this->renderForm('entity/edit.html.twig', [
            'form' => $form,
        ]);
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

            $itemData = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $item->setFirstName($itemData->getFirstName());
            $item->setLastName($itemData->getLastName());
            $item->setPhoto($itemData->getPhoto());
            $item->setFavourite($itemData->getFavourite());

            $entityManager->persist($item);
            $entityManager->flush();

            return $this->redirectToRoute('index');
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

    public function update(Request $request, int $id): Response
    {

        $repository = $this->getDoctrine()->getRepository(Contact::class);
        $entity = $repository->findOneBy([
            'id' => $id
        ]);
        $form = $this->createForm(EntityitemType::class, $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $itemData = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entity->setFirstName($itemData->getFirstName());
            $entity->setLastName($itemData->getLastName());
            $entity->setPhoto($itemData->getPhoto());
            $entity->setFavourite($itemData->getFavourite());

            $entityManager->flush();

            return $this->redirectToRoute('index');
        }

        return $this->redirectToRoute('index');
    }

    public function ajaxupdate(Request $request): Response
    {        
        $id              = $request->get('id');
        $currentValue    = $request->get('val');

        $repository = $this->getDoctrine()->getRepository(Contact::class);
        $entity = $repository->findOneBy([
            'id' => $id
        ]);

        $newValue = $currentValue == '1' ? false : true;

        $entityManager = $this->getDoctrine()->getManager();
        $entity->setFavourite($newValue);
        $entityManager->flush();

        return $this->json([
            'status' => 'ok'
        ]);
    }

    public function delete(Request $request): Response
    {
        $id = $request->get('id');

        $repository = $this->getDoctrine()->getRepository(Contact::class);
        $entity = $repository->findOneBy([
            'id' => $id
        ]);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($entity);
        $entityManager->flush();

        return $this->json([
            'status' => 'ok'
        ]);
    }
}
