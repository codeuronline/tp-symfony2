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
                $afull['label'] = [];
                if (count($afull['position']) > 1) {
                    foreach ($aLabel as $multiLabel) {
                        $afull['id'] = $multiLabel->getId();
                        $afull['label'] .= $multiLabel->getLabel();
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
        echo count($full) . "&nbsp;&nbsp;";
        $newtable = [];
        foreach ($full as $table) {
            $newtable[] = $table["supHierarchique"];
        }

        echo count($newtable) . "&nbsp;&nbsp;";
        var_dump($newtable);
        $newtable = array_values(array_unique($newtable));
        echo count($newtable) . "&nbsp;&nbsp;";
        
        var_dump($newtable);
        //solution de tri via array_multisort
        foreach ($full as $keys => $value) {
            $marks[$keys] = $value["supHierarchique"];
        }
        foreach ($full as $keys1 => $value1) {
            $mark1[$keys1] = $value1["id"];
        }
        array_multisort($marks, SORT_ASC, $mark1, SORT_DESC, $full);
        //var_dump($full);
        echo count($full);
        echo $full[0]["firstname"];
        return $this->render('team/organigramme.html.twig', [
            'users' => $full,
            "filterUsers" => $full,
            "hierarchie" => $newtable
        ]);
        //Envoie la vue sur la page twig

    }
}