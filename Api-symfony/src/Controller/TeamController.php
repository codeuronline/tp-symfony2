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

        $doctrine = $this->get('doctrine');
        $users = $doctrine->getRepository(Team::class)->findAll(); //Récupérer une collection d'objets
        $positions = $doctrine->getRepository(Position::class)->findAll();
        //
        $indice=0;
        // $full=[];
        // foreach ( $users as $elementUser) {
        //     $afull=[];
        //     foreach($positions as $elementPosition){
        //         if($elementPosition->getId()==$elementUser->getId()){
        //             $afull['id']=$elementUser->getId();
        //             $afull['position']=$elementUser->getPositions();
        //             $afull['user']=$elementPosition->getUsers();
        //             $afull['firstname']=$elementUser->getFirstname();
        //             $afull['lastname']=$elementUser->getLastname();
        //             $afull['label']=$elementPosition->getLabel();
        //             $full[]=$afull;
        //         }
        //         }
            
        
                
        //  }
        $full=[];
        
         foreach($users as $elementUser){           
            $afull=[];
            $afull['id']=$elementUser->getId();
            $afull['position']=$elementUser->getPositions();
            $afull['firstname']=$elementUser->getFirstname();
            $afull['lastname']=$elementUser->getLastname();
            $afull['supHierarchique']=$elementUser->getSupHierarchique();
            foreach ( $afull['position'] as $aLabel) {
                if ($afull['id']=$aLabel->getId()){
                $afull['label']=$aLabel->getLabel();                
            }
            $full[]=$afull;}
        
        }
           // echo count($users);
        //    echo $elementUser->getFirstname()."<br>"; 
        //     // echo $elementUser->getFirstname();        
        //     foreach($positions as $elementPosition) {
        //         echo"user n°: ". $elementUser->getId()."==".$i."<br>";      
        //         if(($elementUser->getId()==$i)){
        //             echo "position: ".$i."<br>";
                   
        //             //$afull['position']=$elementUser->getPositions();
        //      $afull['user']=$elementPosition->getUsers();
        //             $afull['firstname']=$elementUser->getFirstname();
        //             $afull['lastname']=$elementUser->getLastname();
        //             $afull['label']=$elementPosition->getLabel();
        //             $full[]=$afull;
        //         //
        //         }
              
        //     $i++;    
        //  }
        
        // }
        //  var_dump(count($full));
        // // $user['findOneBy'] = $repository->findOneBy(['nom' => 'Albert']); // Rechercher un seul produit par son nom


        // // $user['find'] = $repository->find(1);

        // // $user['findBy'] =  $repository->findBy( ['nom' => 'Iguane'],
        // // ['age' => 'ASC'],6,0);

        // $indice = 0;
        // $allUser = [];

        // // foreach ($users as $element) {
        // // //     //
        // // //     $aUser['id'] = $element->getId();
        // //      $aUser['firstname'] = $element->getFirstname();
        // //      $aUser['lastname'] = $element->getLastname();
        // //      $aUser['supHierarchique'] = $element->getSupHierarchique();
        // //      $aUser['photo'] = $element->getPhoto();
        // //      $aUser['position']=$element->getPositions();
        // //      //$aUser['label']=$element->$positions;
        // // //     //var_dump($element->getPositions()->find(1));
        // //     foreach ($positions as $label) {
        // //          if ($indice == $label->getUser()) {
        // //              $aUser['label'] = $label->getLabel();
        // //          } else {$aUser['label'] = "Dev";}
        // //      }
        // //     //var_dump($aUser);
        // //      $filterUser[] = $allUser;
        // // //     //var_dump($filterUser);
        // //      $indice++;
        // //  }
        
        //error_log(print_r($message,1));
        
        //var_dump($users);
        $filterUser=[];
        
            return $this->render('team/organigramme.html.twig', [
            'users'=>$users,
            "position"=>$positions,
            "filterUsers"=>$full
        ]); 
        //Envoie la vue sur la page twig

    }
}