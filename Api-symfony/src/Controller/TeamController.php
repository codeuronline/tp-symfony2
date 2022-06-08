<?Php

namespace App\Controller;

use App\Repository\TeamRepository;
use App\Repository\PositionRepository;
use App\Entity\Position;
use App\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class TeamController extends AbstractController
{
    public function findassuperiorHierarchic(){
        
    }
    /**
     * @Route("/team", name="app_team")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'message' => 'Voici mon api en symfony',
        ]);
    }


    /**
     * @Route("/team/organigramme", name="app_team_organigramme")
     */
    public function organigramme()
    {

        $users = $this->getDoctrine()->getRepository(Team::class)->findAll(); //Récupérer une collection d'objets
        $positions = $this->getDoctrine()->getRepository(Position::class)->findAll();

        // $user['findOneBy'] = $repository->findOneBy(['nom' => 'Albert']); // Rechercher un seul produit par son nom


        // $user['find'] = $repository->find(1);

        // $user['findBy'] =  $repository->findBy( ['nom' => 'Iguane'],
        // ['age' => 'ASC'],6,0);

        $indice = 0;
        $allUser = [];

        foreach ($users as $element) {
            $aUser['id'] = $element->getId();
            $aUser['firstname'] = $element->getFirstname();
            $aUser['lastname'] = $element->getLastname();
            $aUser['supHierarchique'] = $element->getSupHierarchique();
            $aUser['photo'] = $element->getPhoto();
            //$aUser['label']=$element->$positions;
            //var_dump($element->getPositions()->find(1));
            // foreach ($positions as $label) {
            //     if ($indice == $label->getId()) {
            //         $aUser['label'] = $label->getLabel();
            //     } else {$aUser['label'] = "Dev";}
            // }
            var_dump($aUser);
            $filterUser[] = $aUser;
            var_dump($filterUser);
            $indice++;
        }
        
        //error_log(print_r($message,1));
        
        //var_dump($users);
            return $this->render('team/organigramme.html.twig', [
            'users'=>$users,
            "position"=>$positions,
            "filterUsers"=>$filterUser
        ]); 
        //Envoie la vue sur la page twig

    }
}