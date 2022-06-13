<?Php

namespace App\Controller;

use App\Repository\TeamRepository;
use App\Repository\PositionRepository;
use App\Entity\Position;
use App\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;




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

    //obtenir l'ensemble des membres de l'entreprise
    public function getAllTeam(ManagerRegistry $doctrine,$id=null): array
    {
        $users = $doctrine->getManager()->getRepository(Team::class)->findAll(); //Récupérer une collection d'objets
        $full = [];
        $numero = 0;
        foreach ($users as $elementUser) {
            $afull = [];

            $afull['numero'] = $numero;

            $afull['id'] = $elementUser->getId();

            $afull['firstname'] = $elementUser->getFirstname();
            $afull['lastname'] = $elementUser->getLastname();
            $afull['supHierarchique'] = $elementUser->getSupHierarchique();
            $afull['age'] = $elementUser->getAge();
            $afull['adresse'] = $elementUser->getAdresse();
            $afull['mail'] = $elementUser->getmail();
            $afull['cv'] = $elementUser->getCv();
            $afull['tel'] =$elementUser->getTel(); 
            $afull['position'] = $elementUser->getPositions();
            $afull['photo'] = $elementUser->getPhoto();
            $key = $afull['firstname'] . " " . $afull['lastname'];

            
            foreach ($afull['position'] as $position) {
                $positionLabel['label'] = $position->getLabel();

                if (count($afull['position']) > 1) {

                    if (!isset($afull['label'])) {
                        $afull['label'] = $positionLabel['label'];
                    } else {
                        $afull['label'] = $afull['label'] . ' / ' . $positionLabel['label'];
                    }
                } else {
                    $afull['label'] = $position->getLabel();
                }
                if (isset($id)){
                    $full[]=$afull;}
                else{
                    $full[$key] = $afull;
                }
            }
            $numero++;
        }
        return $full;
    }

    /**
     * @Route("/team/organigramme/user/{id}", name="app_team_organigramme_user/{id}")
     */

    public function user(ManagerRegistry $doctrine, $id)
    {
        $user=$this->getAllTeam($doctrine,$id);

    var_dump(count($user));
        $pagination['max'] = count($user);
        $pagination['min'] = 0;
        $pagination['self'] = $user[$id]['id'];
        return $this->render(
            'team/user.html.twig',
            // compact('users', 'filterUsers', 'hierarchie', 'tri')
            [
                'user' => $user[$id],
                'pagination' => $pagination
            ]
        );
    }

    /**
     * @Route("/team/organigramme", name="app_team_organigramme")
     */

    public function organigramme(ManagerRegistry $doctrine)
    {
        //organiser l'ensemble des membres suivant la hierarchie  de l'entrepise
        
        $full = $this->getAllTeam($doctrine);
        // tableau de la hiearchie 
        $hierarchie = [];
        foreach ($full as $table) {
            $hierarchie[] = $table["supHierarchique"];
        }
        $hierarchie = array_values(array_unique($hierarchie));
        // nouveau tableau de tri


        //echo count($newtable) . "&nbsp;&nbsp;";

        //solution de tri via array_multisort
        // foreach ($full as $keys => $value) {
        //     $marks[$keys] = $value["supHierarchique"];
        // }
        // foreach ($full as $keys1 => $value1) {
        //     $mark1[$keys1] = $value1["id"];
        // }




        /*for ($j=0;$j<count($full);$j) {
            for ($i=0; $i < count($hierarchie) ; $i++) { 
             if (($full[$j]["supHierarchique"]== $hierarchie[$i]) && in_array($full,$tri)){
                echo "bob";
             } else{$tri[$j]=$full[$j];}
            }    
        }
        echo count($tri);
        var_dump($tri);*/
        /**  
         * function de tri 
         */
        // function tri($hierarchie, $listemembre, $profondeur, $compteur)
        // {

        //     $compteur++;
        //     for ($i = 0; $i < $profondeur; $i++) {
        //         error_log("profond : " . $profondeur);
        //         foreach ($listemembre as $member) {
        //             error_log("member :" . print_r($member['lastname'], 1));

        //             if ($member["supHierarchique"] = $hierarchie[$i]) {
        //                 // var_dump('noeud');

        //                 $trifinal[] = tri($hierarchie, $listemembre, $profondeur - 1, $compteur);
        //             } else {
        //                 // var_dump('feuille');
        //                 $trifinal[$i] = $member;
        //             }
        //         }

        //         return $trifinal;
        //     }
        // }
        // $users = $full;

        // $p = count($hierarchie);

        // $tri = tri($hierarchie, $full, 3, 0);
        $filterUsers = $full;var_dump($hierarchie);
        return $this->render(
            'team/organigramme.html.twig',
            // compact('users', 'filterUsers', 'hierarchie', 'tri')
            [
                'users' => $full, //$tri[7],
                // "filterUsers" => $full,
                'hierarchie' => $hierarchie
            
            ]
        );
        //Envoie la vue sur la page twig

    }
}