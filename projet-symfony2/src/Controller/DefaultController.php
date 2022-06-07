<?php

namespace App\Controller;

use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="app_default")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'message' => 'Voici mon api en symfony',
        ]);
    }

     /**
     * @Route("/default/organigramme", name="app_default_organigramme")
     */
    public function organigramme(): Response
    {

       
            $repository = $this->getDoctrine()->getRepository(TeamRepository::class); //Récupérer une collection d'objets
    
            // $user['findOneBy'] = $repository->findOneBy(['nom' => 'Albert']); // Rechercher un seul produit par son nom
          
    
            // $user['find'] = $repository->find(1);
    
            // $user['findBy'] =  $repository->findBy( ['nom' => 'Iguane'],
            // ['age' => 'ASC'],6,0);
    
            $user['findAll']= $repository->findAll();
    
          echo '<pre>',print_r($user,1),'</pre>';
    
        return $this->render('organigramme/organigramme.html.twig', [
            'message' => 'Voici mon api en symfony',
        ]);
    }


}
