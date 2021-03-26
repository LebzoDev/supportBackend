<?php

namespace App\Controller;

use App\Entity\AdminSystem;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InfosUserController extends AbstractController
{
    private $repoAdmin;
    private $user;
    public function __construct(Security $security){
        $this->user = $security->getUser();
    }
    /**
     * @Route("api/administrateur/getInfos", name="getInfos")
     */
    public function getInfos()
    {
       if ($this->user instanceof AdminSystem) {

           if ($this->user->getArchive()) {
              return $this->json(['Message'=>"Vous n'avez pas accés à ce service"],200);
           }else{
                $agence =  $this->user->getAgencePartenaire();
                $compte = $agence->getCompteAgencePartenaire();
                $usersAgence = $agence->getUtilisateurs();
                return $this->json(['detailsCompte'=>$compte,'idUser'=>$this->user->getId(),'users'=>$usersAgence,'Message'=>'Bienvenue cher utilisateur'],200);
           }
          
       }
    }
}
