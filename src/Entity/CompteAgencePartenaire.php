<?php

namespace App\Entity;

use App\Entity\Depot;
use App\Entity\Transaction;
use App\Entity\AgencePartenaire;
use Doctrine\ORM\Mapping as ORM;
use App\Controller\InfosUserController;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\CompteAgencePartenaireRepository;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"displaysTransactions"}},
 *      collectionOperations={
 *          "get","post",
 *           "getInfos"={
 *                 "path"="/administrateur/getInfos",
 *                 "controller"="App\Controlller\InfosUserController::getInfos",
 *                 "methods"="GET"
 *      }
 *      },
 *     itemOperations={
 *          "get","put","delete"
 *      }
 * )
 * @ORM\Entity(repositoryClass=CompteAgencePartenaireRepository::class)
 */
class CompteAgencePartenaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"displaysTransactions"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"displaysTransactions"})
     */
    private $numeroCompte;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"displaysTransactions"})
     */
    private $solde;

    /**
     * @ORM\Column(type="date")
     * @Groups({"displaysTransactions"})
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"displaysTransactions"})
     */
    private $statut;

    /**
     * @ORM\OneToOne(targetEntity=AgencePartenaire::class, inversedBy="compteAgencePartenaire", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @ApiSubresource()
     */
    private $agencePartenaireAssociee;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="compteAP")
     * @ApiSubresource()
     */
    private $transactions;

    /**
     * @ORM\OneToMany(targetEntity=Depot::class, mappedBy="compteAP")
     * @ApiSubresource()
     */
    private $depots;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="compteAPRetrait")
     * @ApiSubresource()
     */
    private $retraits;

    public function __construct()
    {
        $this->transactions = new ArrayCollection();
        $this->depots = new ArrayCollection();
        $this->retraits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroCompte(): ?string
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(string $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getAgencePartenaireAssociee(): ?AgencePartenaire
    {
        return $this->agencePartenaireAssociee;
    }

    public function setAgencePartenaireAssociee(AgencePartenaire $agencePartenaireAssociee): self
    {
        $this->agencePartenaireAssociee = $agencePartenaireAssociee;

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getTransactions(): Collection
    {
        return $this->transactions;
    }

    public function addTransaction(Transaction $transaction): self
    {
        if (!$this->transactions->contains($transaction)) {
            $this->transactions[] = $transaction;
            $transaction->setCompteAP($this);
        }

        return $this;
    }

    public function removeTransaction(Transaction $transaction): self
    {
        if ($this->transactions->removeElement($transaction)) {
            // set the owning side to null (unless already changed)
            if ($transaction->getCompteAP() === $this) {
                $transaction->setCompteAP(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Depot[]
     */
    public function getDepots(): Collection
    {
        return $this->depots;
    }

    public function addDepot(Depot $depot): self
    {
        if (!$this->depots->contains($depot)) {
            $this->depots[] = $depot;
            $depot->setCompteAP($this);
        }

        return $this;
    }

    public function removeDepot(Depot $depot): self
    {
        if ($this->depots->removeElement($depot)) {
            // set the owning side to null (unless already changed)
            if ($depot->getCompteAP() === $this) {
                $depot->setCompteAP(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getRetraits(): Collection
    {
        return $this->retraits;
    }

    public function addRetrait(Transaction $retrait): self
    {
        if (!$this->retraits->contains($retrait)) {
            $this->retraits[] = $retrait;
            $retrait->setCompteAPRetrait($this);
        }

        return $this;
    }

    public function removeRetrait(Transaction $retrait): self
    {
        if ($this->retraits->removeElement($retrait)) {
            // set the owning side to null (unless already changed)
            if ($retrait->getCompteAPRetrait() === $this) {
                $retrait->setCompteAPRetrait(null);
            }
        }

        return $this;
    }
}
