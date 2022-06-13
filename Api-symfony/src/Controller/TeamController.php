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
        $theUsers = $full;
        $newUsers = [];
        for ($i = 0; $i < count($hierarchie); $i++) {
            for ($j = 0; $j < count($theUsers); $j++) {
                if (!(in_array($theUsers[$j], $newUsers))) {
                    // si l'utilisateur n'est pas dans le tableau
                    if ($theUsers[$j]['supHierarchie'] == $hierarchie[$i]) {
                        // on intitlise la position
                        $position=0;
                        while (($position <count($newUsers))||($newUsers[$position]['firstname'].' '.$newUsers['lastname']!==$hierarchie[$i]))
                        {
                            $position++;
                        } 
                        if (isset($newUsers[$position])){
                            $max= count($newUsers);
                            $pre=[];
                            $last=[];
                            //Pre tableau 
                            for ($index=0;$index<$position;$index++ ){
                               $pre[]=$newUsers[$index];
                                
                            }
                            for ($index=$position+1;$index<$max;$index++){
                                $next[]=$newUsers[$index];
                            }
                            // 
                            $newUsers[]=array_merge($pre,$theUsers[$j],$next);
                            
                            //tableau 2 l'apres
                            // puis on merge les 3 tableaux
                        } else { 
                            $newUsers[]=$theUsers[$j];
                        }
                        $theUsers= array_shift($theUsers);
                    }
                }
                }
        }
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