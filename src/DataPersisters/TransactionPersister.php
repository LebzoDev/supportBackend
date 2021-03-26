<?php

namespace App\DataPersisters;

use App\Entity\Transaction;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\Entity\AdminSystem;
use App\Service\frais;
use App\Service\fraisService;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TransactionPersister extends AbstractController implements DataPersisterInterface{

        private $manager;
        private $user;
        private $serviceFrais;
        public function __construct(EntityManagerInterface $manager, Security $security, fraisService $serviceFrais){
               
                $this->manager = $manager;
                $this->user = $security->getUser();
                $this->serviceFrais = $serviceFrais;
        }

        public function supports($data): bool{
            return $data instanceof Transaction;
        }

         public function persist($data, array $context=[])
         {
             $date = new DateTime();
            if(isset($context['collection_operation_name'])){
                if ($this->user instanceof AdminSystem) {
                    $compte = $this->user->getAgencePartenaire()->getCompteAgencePartenaire();
                    $data->setUtilisateurAP($this->user)
                         ->setCompteAP($compte);
                }else{
                    $errorMessage = "Vous n'etes pas autorisé à avoir accés!!!";
                }
                if ($data->getMontant() && $compte){
                    $oldSolde = $compte->getSolde();
                    $newSolde = $oldSolde - intval($data->getMontant());
                    $compte->setSolde($newSolde);
                    $montant = $data->getMontant();
                }else{
                    $errorMessage="Veuillez donner le montant de la trancation";
                }
                if (!isset($errorMessage)){
                    if ($data->getNomCompletClient()  && $data->getNumeroTelClient() && $data->getCniClient()) {

                        if ($data->getNomCompletBeneficiaire() && $data->getNumeroTelBeneficiaire()) {
                            
                            $codeTransaction = $date->getTimestamp();
                            $frais = $this->serviceFrais->getfrais($montant);
                            $data->setDateTransaction($date)
                                 ->setCodeTransaction($codeTransaction)
                                 ->setFrais($frais)
                                 ->setPartEtat($frais*0.4)
                                 ->setPartSysteme($frais*0.3)
                                 ->setPartUserDepot($frais*0.1)
                                 ->setPartUserRetrait($frais*0.2)
                                 ->setRetraitEffectif(false);
                            $this->manager->persist($data);
                            $this->manager->persist($compte);
                          

                        }else{
                            $errorMessage="Veuillez revoir les données du beneficiaire";
                        }

                    }else{
                        $errorMessage="Veuillez revoir les données du clients";
                    }
                   
                }
               
                if (!isset($errorMessage)) {
                    $this->manager->flush();
                    return $this->json(['data'=>$data,'La transaction a été effectué avec succes'],201); 
                }else{
                    dd($errorMessage,$data);
                    return $this->json(['data'=>$data,'MessageError'=>$errorMessage],401);
                }
              
        }
        
        
        if (isset($context['item_operation_name'])){

            if ($data->getRetraitEffectif()){
                $Message = "Le retrait est déja effectif";
                return $this->json(['Message'=>$Message]);
            }else{
                $userApRetrait = $this->user;
                if ($userApRetrait instanceof AdminSystem) {
                   $compte = $userApRetrait->getAgencePartenaire()->getCompteAgencePartenaire();
                   $solde = $compte->getSolde();
                   $montant =  $data->getMontant();
                }else{
                  $errorMessage ="Vous n'avez pas accés à ce service";
                }
                if (!isset($errorMessage)) {
                   $newSolde = $solde+$montant;
                   $data->setRetraitEffectif(true)
                        ->setDateRetrait($date)
                        ->setUtilisateurAPRetrait($userApRetrait)
                        ->setCompteAPRetrait($compte);
                   $compte->setSolde($newSolde);
                   $this->manager->persist($data);
                   $this->manager->persist($compte);
                   $this->manager->flush();

                   return $this->json(['data'=>$data,'Message'=>'Le retrait est effectuté avec succés'],200);
                }else{
                    return $this->json(['Message'=>$errorMessage],401);
                }

            }
        }

        } 

        public function remove($data){
            $data->setArchive(true);
            $this->persist($data);
            $this->manager->flush();    
        }
    }