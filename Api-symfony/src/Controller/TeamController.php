<?Php

namespace App\Controller;

use App\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;


class TeamController extends AbstractController
{
    
    /**
     * @Route("/team", name="app_team")
     * affiche la vue de index
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'message' => 'Voici mon api en symfony',
        ]);
    }

    // Renvoie un Tableau de la Team 
    // si $id est defini Renvoie un utilisateur particulier
    
    public function getAllTeam(ManagerRegistry $doctrine,?int $id=null): array
    {
        $users = $doctrine->getRepository(Team::class)->findAll(); //Récupérer une collection d'objets
        $full = [];
        $numero = 0; // contient le numero dans 'l utilsateur dans l'ordre d insertion
        foreach ($users as $elementUser) {
            $afull = [];
            $afull['numero'] = $numero;
            $afull['id'] = $elementUser->getId();
            $afull['firstname'] = $elementUser->getFirstname();
            $afull['lastname'] = $elementUser->getLastname();
            $afull['key'] = $elementUser->getFirstname() . " " . $elementUser->getLastname();
            $afull['supHierarchique'] = $elementUser->getSupHierarchique();
            $afull['level'] = $elementUser->getLevel();
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
                    $afull['niveau']=$position->getNiveau();
                }
                if (isset($id)){
                    $full[]=$afull;
                }else{
                    $full[$key] = $afull;
                }
            }
            $numero++;
        }
        return $full;
    }

    /**
     * @Route("/team/organigramme/user/{id}", name="app_team_organigramme_user/{id}")
     * Affiche l'utilisateur $id dans la vue
     */

    public function user(ManagerRegistry $doctrine, $id)
    {
        $user=$this->getAllTeam($doctrine,$id);

    // var_dump(count($user));
        $pagination['max'] = count($user);
        $pagination['min'] = 0;
        $pagination['self'] = $user[$id]['id'];
        return $this->render(
            'team/user.html.twig',
                   [
                'user' => $user[$id],
                'pagination' => $pagination
            ]
        );
    }
    
    /** methode construisant la structure hierarchique d'une organisation 
     *  à partir des $users
     *  et renvoyant un tableau $table des dépendances de cette structure
     */

    
   public function construcHierarchie(ManagerRegistry $doctrine,$users){
    foreach ($users as $user) {
        if (empty($user["supHierarchique"])){
                $table[$user["key"]] = null;
            } else {
                $table[$user["key"]] = $user["supHierarchique"];
            }
    }
    // var_dump($table);
    // retourne la structure hierarchique
    return $table;
   }
   
   
    /**
     * @Route("/team/recursive", name="app_team_recursive") 
     *  et methode pour trier $element selon la structure hieararchieque $tableSupervisor
     */

    public function recursive(ManagerRegistry $doctrine,$element,$tableSupervisor)
    {

        // var_dump("element:", $element, "T => hieararchiee:", $tableSupervisor);
        // genere un tabeau $level des profondeurs à partir des $element selon $tableSupervisor
        function profondeur($tableSupervisor,$element,$crw,&$level) {

            error_log("elem : " . $element . " crw : " . $crw . " " . print_r($level, 1));

            if ($tableSupervisor[$crw] == null) {
                $level[$crw] = 0;

                error_log("exit");
                
                return 0;
            } 
            if (!isset($level[$element])) {
                $level[$element]=1;
            }else{
                $level[$element]++;
            }
            profondeur($tableSupervisor,$element,$tableSupervisor[$crw],$level);
        };
        $level = [];
        
        foreach ($tableSupervisor as $id => $data) {
            profondeur($tableSupervisor,$id,$id,$level);
        }
        // recupere les clé du tableau hierarchique
        $keys=array_keys($tableSupervisor);
        // recupere les valeurs du tableau hierarchique
        $values=array_values($tableSupervisor);
        // recupere les feuilles qui est la difference des 2 tableaux
        $leaves = array_diff($keys, $values);
        // var_dump("level : ", $level);
        // var_dump("-----------------");
        // var_dump("leaves:", array_diff($keys, $values));
        // var_dump("-----------------");
        
        // genere un tableau $order organiser avec selon $tablesupervisor
        // avec les feuilles $leave
        function order($tableSupervisor, $leaves, $prf, $level, &$order)
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
                 array_unshift($chaine, $tableSupervisor[$chaine[0]]);
                 $order[$id]=$chaine;
            }
            error_log("prf : " . $prf);
            order($tableSupervisor, $leaves, $prf-1, $level, $order);
        }

        $order=[];
        order($tableSupervisor,$leaves,max($level),$level,$order);
        $result=[];
        foreach($order as $ordre){
            $result=array_merge($result,$ordre);
        }
        $result =array_unique($result);
           return $result;
           
        // commnenter le return precedent et decommenter la suite pour avoir une vue
        // dans twig a l'adresse team/recursive
        // return $this->render(
        //     'team/recursive.html.twig',
        //     [
        //         'element'   => $element,
        //         'order'    => $result
            
        //     ]
        // );
    // Envoie la vue sur la page twig
        

    }  
    /**
     * @Route("/team/organigramme", name="app_team_organigramme")
     */

    public function organigramme(ManagerRegistry $doctrine)
    {
        // organiser l'ensemble des membres suivant la hierarchie  de l'entrepise
        
        // on recupere tous les membres de l'organisation
        $full = $this->getAllTeam($doctrine);
        // on recupère l'organistion hierarchique  
        $hierarchie = $this->construcHierarchie($doctrine,$full);
        
        // on tri selon l'organisation hierarchique
        $order = $this->recursive($doctrine,$full,$hierarchie);
    
                
        //var_dump("hieararchie",$hierarchie);
        //var_dump('order',array_values($order));
        return $this->render(
            'team/organigramme.html.twig',
            [
                'users' => $full, 
                'order' => $order,
                'hierarchie' => $hierarchie
            
            ]
        );
        //Envoie la vue sur la page twig

    }
}