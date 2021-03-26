<?php

namespace App\Entity;

use App\Entity\AdminSystem;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\CompteAgencePartenaire;
use App\Repository\TransactionRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ApiResource(
 *      routePrefix="/agence",
 *      normalizationContext={"groups"={"displaysTransactions"}},
 *      collectionOperations={
 *          "get","post"
 *      },
 *      itemOperations={
 *          "get","put","delete"
 *      }
 *  )
 * @ORM\Entity(repositoryClass=TransactionRepository::class)
 * @ApiFilter(SearchFilter::class, properties={"codeTransaction":"exact"})
 * @ApiFilter(DateFilter::class, properties={"dateTransaction","dateRetrait"})
 * 
 */
class Transaction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"displaysTransactions"})
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"displaysTransactions"})
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"displaysTransactions"})
     */
    private $codeTransaction;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"displaysTransactions"})
     */
    private $frais;

    /**
     * @ORM\Column(type="date")
     * @Groups({"displaysTransactions"})
     */
    private $dateTransaction;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"displaysTransactions"})
     */
    private $part_etat;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"displaysTransactions"})
     */
    private $part_systeme;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"displaysTransactions"})
     */
    private $part_user_depot;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"displaysTransactions"})
     */
    private $part_user_retrait;

    /**
     * @ORM\ManyToOne(targetEntity=AdminSystem::class, inversedBy="transactions")
     * @Groups({"displaysTransactions"})
     * @ORM\JoinColumn(nullable=false)
     * @ApiSubresource()
     */
    private $utilisateurAP;

    /**
     * @ORM\ManyToOne(targetEntity=CompteAgencePartenaire::class, inversedBy="transactions")
     * @Groups({"displaysTransactions"})
     * @ORM\JoinColumn(nullable=false)
     * @ApiSubresource()
     */
    private $compteAP;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"displaysTransactions"})
     */
    private $nomCompletBeneficiaire;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"displaysTransactions"})
     */
    private $numeroTelClient;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"displaysTransactions"})
     */
    private $nomCompletClient;

    /**
     * @ORM\ManyToOne(targetEntity=CompteAgencePartenaire::class, inversedBy="retraits")
     * @Groups({"displaysTransactions"})
     * @ApiSubresource()
     */
    private $compteAPRetrait;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"displaysTransactions"})
     */
    private $numeroTelBeneficiaire;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"displaysTransactions"})
     */
    private $retraitEffectif;

    /**
     * @ORM\ManyToOne(targetEntity=AdminSystem::class, inversedBy="retraits")
     * @Groups({"displaysTransactions"})
     * @ApiSubresource()
     */
    private $utilisateurAPRetrait;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"displaysTransactions"})
     */
    private $cniClient;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"displaysTransactions"})
     */
    private $cniBeneficiaire;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups({"displaysTransactions"})
     */
    private $dateRetrait;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getCodeTransaction(): ?string
    {
        return $this->codeTransaction;
    }

    public function setCodeTransaction(string $codeTransaction): self
    {
        $this->codeTransaction = $codeTransaction;

        return $this;
    }

    public function getFrais(): ?int
    {
        return $this->frais;
    }

    public function setFrais(int $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getDateTransaction(): ?\DateTimeInterface
    {
        return $this->dateTransaction;
    }

    public function setDateTransaction(\DateTimeInterface $dateTransaction): self
    {
        $this->dateTransaction = $dateTransaction;

        return $this;
    }

    public function getPartEtat(): ?float
    {
        return $this->part_etat;
    }

    public function setPartEtat(?float $part_etat): self
    {
        $this->part_etat = $part_etat;

        return $this;
    }

    public function getPartSysteme(): ?float
    {
        return $this->part_systeme;
    }

    public function setPartSysteme(?float $part_systeme): self
    {
        $this->part_systeme = $part_systeme;

        return $this;
    }

    public function getPartUserDepot(): ?float
    {
        return $this->part_user_depot;
    }

    public function setPartUserDepot(?float $part_user_depot): self
    {
        $this->part_user_depot = $part_user_depot;

        return $this;
    }

    public function getPartUserRetrait(): ?float
    {
        return $this->part_user_retrait;
    }

    public function setPartUserRetrait(?float $part_user_retrait): self
    {
        $this->part_user_retrait = $part_user_retrait;

        return $this;
    }

    public function getUtilisateurAP(): ?AdminSystem
    {
        return $this->utilisateurAP;
    }

    public function setUtilisateurAP(?AdminSystem $utilisateurAP): self
    {
        $this->utilisateurAP = $utilisateurAP;

        return $this;
    }

    public function getCompteAP(): ?CompteAgencePartenaire
    {
        return $this->compteAP;
    }

    public function setCompteAP(?CompteAgencePartenaire $compteAP): self
    {
        $this->compteAP = $compteAP;

        return $this;
    }

    public function getNomCompletBeneficiaire(): ?string
    {
        return $this->nomCompletBeneficiaire;
    }

    public function setNomCompletBeneficiaire(?string $nomCompletBeneficiaire): self
    {
        $this->nomCompletBeneficiaire = $nomCompletBeneficiaire;

        return $this;
    }

    public function getNumeroTelClient(): ?string
    {
        return $this->numeroTelClient;
    }

    public function setNumeroTelClient(string $numeroTelClient): self
    {
        $this->numeroTelClient = $numeroTelClient;

        return $this;
    }

    public function getNomCompletClient(): ?string
    {
        return $this->nomCompletClient;
    }

    public function setNomCompletClient(string $nomCompletClient): self
    {
        $this->nomCompletClient = $nomCompletClient;

        return $this;
    }

    public function getCompteAPRetrait(): ?CompteAgencePartenaire
    {
        return $this->compteAPRetrait;
    }

    public function setCompteAPRetrait(?CompteAgencePartenaire $compteAPRetrait): self
    {
        $this->compteAPRetrait = $compteAPRetrait;

        return $this;
    }

    public function getNumeroTelBeneficiaire(): ?string
    {
        return $this->numeroTelBeneficiaire;
    }

    public function setNumeroTelBeneficiaire(?string $numeroTelBeneficiaire): self
    {
        $this->numeroTelBeneficiaire = $numeroTelBeneficiaire;

        return $this;
    }

    public function getRetraitEffectif(): ?bool
    {
        return $this->retraitEffectif;
    }

    public function setRetraitEffectif(?bool $retraitEffectif): self
    {
        $this->retraitEffectif = $retraitEffectif;

        return $this;
    }

    public function getUtilisateurAPRetrait(): ?AdminSystem
    {
        return $this->utilisateurAPRetrait;
    }

    public function setUtilisateurAPRetrait(?AdminSystem $utilisateurAPRetrait): self
    {
        $this->utilisateurAPRetrait = $utilisateurAPRetrait;

        return $this;
    }

    public function getCniClient(): ?string
    {
        return $this->cniClient;
    }

    public function setCniClient(?string $cniClient): self
    {
        $this->cniClient = $cniClient;
        return $this;
    }

    public function getCniBeneficiaire(): ?string
    {
        return $this->cniBeneficiaire;
    }

    public function setCniBeneficiaire(?string $cniBeneficiaire): self
    {
        $this->cniBeneficiaire = $cniBeneficiaire;

        return $this;
    }

    public function getDateRetrait(): ?\DateTimeInterface
    {
        return $this->dateRetrait;
    }

    public function setDateRetrait(?\DateTimeInterface $dateRetrait): self
    {
        $this->dateRetrait = $dateRetrait;

        return $this;
    }
}
