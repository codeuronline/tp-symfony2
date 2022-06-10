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
    public function findassuperiorHierarchic()
    {
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



        $full = [];

        foreach ($users as $elementUser) {
            $afull = [];
            $afull['id'] = $elementUser->getId();
            $afull['position'] = $elementUser->getPositions();
            $afull['firstname'] = $elementUser->getFirstname();
            $afull['lastname'] = $elementUser->getLastname();
            $afull['photo'] = $elementUser->getPhoto();
            $afull['supHierarchique'] = $elementUser->getSupHierarchique();
            foreach ($afull['position'] as $aLabel) {
                //oninitailise le label
                $afull['label'] = [];
                //si position contient plus  de 2 label
                if (count($afull['position']) > 1) {
                    foreach ($aLabel as $multiLabel) {
                        $afull['id'] = $multiLabel->getId();
                        $afull['label'] .= "/".$multiLabel->getLabel();
                    }
                } else {
                    if ($afull['id'] = $aLabel->getId()) {
                        $afull['label'] = $aLabel->getLabel();
                    }
                }
                $full[] = $afull;
            }
        }
   
        // nouveau tableau de tri
     
        $hiearchie = [];
        foreach ($full as $table) {
            $hiearchie[] = $table["supHierarchique"];
        }

     
        // var_dump($hiearchie);
        $hierarchie = array_values(array_unique($hiearchie));
        //echo count($newtable) . "&nbsp;&nbsp;";

       //solution de tri via array_multisort
        foreach ($full as $keys => $value) {
            $marks[$keys] = $value["supHierarchique"];
        }
        foreach ($full as $keys1 => $value1) {
            $mark1[$keys1] = $value1["id"];
        }

        function tri($hierarchie, $listemembre,$profondeur,$compteur)
        {  
            
            $compteur++;
            for ($i=0;$i<$profondeur;$i++)
                {
                error_log("profond : ".$profondeur);
                foreach ($listemembre as $member)
                {
                    error_log("member :".print_r($member['lastname'], 1));
           
                if ($member["supHierarchique"] = $hierarchie[$i]) {
                    var_dump('noeud');
                    
                    $trifinal[]= tri($hierarchie, $listemembre, $profondeur - 1,$compteur);
                } else {
                    var_dump('feuille');
                    $trifinal[] = $member;
                }
            }
            
            return $trifinal;
        }
    }
         $users = $full;
         
        $p= count ($hierarchie);
        
        $tri = tri($hierarchie, $full, 3,0);
        $filterUsers = $full;
       ;
       
    //    var_dump(count($tri));
        // var_dump($tri);
        
        //var_dump(count($tri));
        // echo count($full);
        // echo $full[0]["firstname"];
        return $this->render(
            'team/organigramme.html.twig',
           // compact('users', 'filterUsers', 'hierarchie', 'tri')
            [ 'users' => $full,//$tri[7],
            // "filterUsers" => $full,
             "hierarchie" => $hierarchie
            // 
            ]
        );
        //Envoie la vue sur la page twig

    }
}