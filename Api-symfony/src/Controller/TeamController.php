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
     * @Route("/team/recursive", name="app_team_recursive")
     */

    public function recursive(ManagerRegistry $doctrine)
    {
        $element = ['A', 'B', 'C', 'D', 'E'];
        $t = [
            'A' => null,
            'B' => 'A',
            'C' => 'A',
            'D' => 'B',
            'E' => 'B'
        ];
        var_dump("element:", $element, "T => Hiearchie:", $t);
        function profondeur($t,$element,$crw,&$level) {

            error_log("elem : " . $element . " crw : " . $crw . " " . print_r($level, 1));

            if ($t[$crw] == null) {
                $level[$crw] = 0;

                error_log("exit");
                
                return 0;
            } 
            if (!isset($level[$element])) {
                $level[$element]=1;
            }else{
                $level[$element]++;
            }
            profondeur($t,$element,$t[$crw],$level);
        };
        $level = [];
        foreach ($t as $id => $data) {
            profondeur($t,$id,$id,$level);
        }
        $keys=array_keys($t);
        $values=array_values($t);
        $leaves = array_diff($keys, $values);
        var_dump("level : ", $level);
        var_dump("-----------------");
        var_dump("leaves:", array_diff($keys, $values));
        var_dump("-----------------");

        function order($t, $leaves, $prf, $level, &$order)
        {
            if ($prf == 0) {
                return;
            }
            foreach ($leaves as $leaf) {
                if ($level[$leaf] == $prf) {
                    $order[] = [$leaf];
                    
                }
                
                
            }
            foreach ($order as $id=>$chaine) {
                 array_unshift($chaine, $t[$chaine[0]]);
                 $order[$id]=$chaine;
            }
            error_log("prf : " . $prf);
            order($t, $leaves, $prf-1, $level, $order);
        }

        $order=[];
        order($t,$leaves,max($level),$level,$order);
        var_dump($order);
        $result=[];
        foreach($order as $ordre){
            $result=array_merge($result,$ordre);
        }
        $result =array_unique($result);
        var_dump($result);
        
        return $this->render(
            'team/recursive.html.twig',
            [
                'element'   => $result,
                't'         => $t,

                'ordre'     => $result,
            ]
        );
        //Envoie la vue sur la page twig
        

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
        $theUsers = $full;
        
                
        $filterUsers = $full;
        var_dump($hierarchie);
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