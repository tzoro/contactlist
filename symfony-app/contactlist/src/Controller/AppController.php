<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;

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
