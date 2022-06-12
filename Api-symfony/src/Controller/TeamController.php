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


    /**
     * @Route("/team/organigramme/user/{id}", name="app_team_organigramme_user/{id}")
     */

    public function user(ManagerRegistry $doctrine,$id)
    {

                
        $users = $doctrine->getManager()->getRepository(Team::class)->findAll(); //Récupérer une collection d'objets
        //$positions = $doctrine->getRepository(Position::class)->findAll();
        $user = [];
        $numero=0;
        foreach ($users as $elementUser) {
            $aUser = [];
           
            $aUser['numero']=$numero; 
            $aUser['id'] = $elementUser->getId();
            $aUser['position'] = $elementUser->getPositions();
            $aUser['firstname'] = $elementUser->getFirstname();
            $aUser['lastname'] = $elementUser->getLastname();
            $aUser['photo'] = $elementUser->getPhoto();
            $aUser['age'] = $elementUser->getAge();
            $aUser['mail'] = $elementUser->getMail();
            $aUser['cv'] = $elementUser->getCv();
            $aUser['tel'] = $elementUser->getTel();
            $aUser['adresse'] = $elementUser->getAdresse();
            $aUser['supHierarchique'] = $elementUser->getSupHierarchique();
            // $afull['label'] = [];
            foreach ($aUser['position'] as $aLabel) {
                //oninitailise le label

                //si position contient plus  de 2 label
                if (count($aUser['position']) > 1 && isset($aUser['label'])) {
                    foreach ($aLabel as $multiLabel) {
                        $aUser['id'] = $multiLabel->getId();
                        $aUser['label'] = $aUser['label'] . "/" . $multiLabel->getLabel();
                    }
                } else {
                    if ($aUser['id'] = $aLabel->getId()) {
                        $aUser['label'] = $aLabel->getLabel();
                    }
                }
                $numero++;
                $user[] = $aUser;
            }
        }

        $pagination['max'] = count($user);
        $pagination['min'] = 0;
        $pagination['self'] = $user[$id]['id'];
        //ar_dump($pagination);
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
        
        $users = $doctrine->getManager()->getRepository(Team::class)->findAll(); //Récupérer une collection d'objets
        //$positions = $doctrine->getRepository(Position::class)->findAll();
        //$position = $doctrine->getRepository(Position::class);



        $full = [];
        $numero=0;
        foreach ($users as $elementUser) {
            $afull = [];
            $afull['numero']=$numero;
            $afull['id'] = $elementUser->getId();
            $afull['position'] = $elementUser->getPositions();
            $afull['firstname'] = $elementUser->getFirstname();
            $afull['lastname'] = $elementUser->getLastname();
            $afull['photo'] = $elementUser->getPhoto();

            $afull['supHierarchique'] = $elementUser->getSupHierarchique();
            $afull['label'] = [];
            //$afull['label'] = (null !== ($position->findOneBy(['id' => $afull['id']]))) ? $position->findOneBy(['id' => $afull['id']])->getLabel() : $afull['position']->getLabel();
            //$afull['label'] = (null !== ($position->find($afull['id'])))             ? $position->find($afull['id'])->getLabel()              : $afull['position']->getLabel();
            foreach ($afull['position'] as $aLabel) {
                // on initailise le label

                //si position contient plus  de 2 label
                if (count($afull['position']) > 1 && isset($afull['label'])) {
                    foreach ($aLabel as $multiLabel) {
                        $afull['id'] = $multiLabel->getId();
                        $afull['label'] = $afull['label'] . "/" . $multiLabel->getLabel();
                    }
                } else {
                    if ($afull['id'] = $aLabel->getId()) {
                        $afull['label'] = $aLabel->getLabel();
                    }
                }
                $numero++;
                $full[] = $afull;
            }
        }

        // tableau de la hiearchie 
        $hierarchie = [];
        foreach ($full as $table) {
            $hiearchie[] = $table["supHierarchique"];
        }
        $hierarchie = array_values(array_unique($hiearchie));
        // nouveau tableau de tri

        
        //echo count($newtable) . "&nbsp;&nbsp;";

        //solution de tri via array_multisort
        // foreach ($full as $keys => $value) {
        //     $marks[$keys] = $value["supHierarchique"];
        // }
        // foreach ($full as $keys1 => $value1) {
        //     $mark1[$keys1] = $value1["id"];
        // }
        
        
        $tri = [];

        /*for ($j=0;$j<count($full);$j) {
            for ($i=0; $i < count($hierarchie) ; $i++) { 
             if (($full[$j]["supHierarchique"]== $hierarchie[$i]) && in_array($full,$tri)){
                echo "bob";
             } else{$tri[$j]=$full;}
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
        $filterUsers = $full;;
        return $this->render(
            'team/organigramme.html.twig',
            // compact('users', 'filterUsers', 'hierarchie', 'tri')
            [
                'users' => $full, //$tri[7],
                // "filterUsers" => $full,
                'hierarchie' => $hierarchie,
                'tri' => $full
                // 
            ]
        );
        //Envoie la vue sur la page twig

    }
}