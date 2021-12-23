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



      $entityManager = $this->getDoctrine()->getManager();
      $repo = new Contact();
      $repo->setFirstName('tzoro');
      
      $entityManager->persist($repo);
      $entityManager->flush();


      $repository = $this->getDoctrine()->getRepository(Contact::class);
      $cached = $repository->findAll();
      // d($cached);exit;

        return $this->render('test/index.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'users' => $cached,
            'notifications' => 2,
        ]);

        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/AppController.php',
        // ]);
    }
}
