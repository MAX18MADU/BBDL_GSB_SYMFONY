<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament", indexes={@ORM\Index(name="FK_LABORATOIRE_MEDICAMENT", columns={"IDLABORATOIRE"})})
 * @ORM\Entity(repositoryClass="App\Repository\MedicamentRepository")
 */
class Medicament
{
    /**
     * @var string
     *
     * @ORM\Column(name="CIP", type="string", length=13, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMMEDICAMENT", type="string", length=32, nullable=true)
     */
    private $nommedicament;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GRAMMAGE", type="string", length=32, nullable=true)
     */
    private $grammage;

    /**
     * @var \Laboratoire
     *
     * @ORM\ManyToOne(targetEntity="Laboratoire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDLABORATOIRE", referencedColumnName="IDLABORATOIRE")
     * })
     */
    private $idlaboratoire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Forme", inversedBy="cip")
     * @ORM\JoinTable(name="administrer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="CIP", referencedColumnName="CIP")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IDFORME", referencedColumnName="IDFORME")
     *   }
     * )
     */
    private $idforme;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Excipient", inversedBy="cip")
     * @ORM\JoinTable(name="composer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="CIP", referencedColumnName="CIP")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IDEXCIPIENT", referencedColumnName="IDEXCIPIENT")
     *   }
     * )
     */
    private $idexcipient;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Molecule", inversedBy="cip")
     * @ORM\JoinTable(name="contenir",
     *   joinColumns={
     *     @ORM\JoinColumn(name="CIP", referencedColumnName="CIP")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IDMOLECULE", referencedColumnName="IDMOLECULE")
     *   }
     * )
     */
    private $idmolecule;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idforme = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idexcipient = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idmolecule = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getCip(): ?string
    {
        return $this->cip;
    }

    public function getNommedicament(): ?string
    {
        return $this->nommedicament;
    }

    public function setNommedicament(?string $nommedicament): self
    {
        $this->nommedicament = $nommedicament;

        return $this;
    }


    public function getGrammage(): ?string
    {
        return $this->grammage;
    }

    public function setGrammage(?string $grammage): self
    {
        $this->grammage = $grammage;

        return $this;
    }

    public function getIdlaboratoire(): ?Laboratoire
    {
        return $this->idlaboratoire;
    }

    public function setIdlaboratoire(?Laboratoire $idlaboratoire): self
    {
        $this->idlaboratoire = $idlaboratoire;

        return $this;
    }

    /**
     * @return Collection|Forme[]
     */
    public function getIdforme(): Collection
    {
        return $this->idforme;
    }

    public function addIdforme(Forme $idforme): self
    {
        if (!$this->idforme->contains($idforme)) {
            $this->idforme[] = $idforme;
        }

        return $this;
    }

    public function removeIdforme(Forme $idforme): self
    {
        $this->idforme->removeElement($idforme);

        return $this;
    }

    /**
     * @return Collection|Excipient[]
     */
    public function getIdexcipient(): Collection
    {
        return $this->idexcipient;
    }

    public function addIdexcipient(Excipient $idexcipient): self
    {
        if (!$this->idexcipient->contains($idexcipient)) {
            $this->idexcipient[] = $idexcipient;
        }

        return $this;
    }

    public function removeIdexcipient(Excipient $idexcipient): self
    {
        $this->idexcipient->removeElement($idexcipient);

        return $this;
    }

    /**
     * @return Collection|Molecule[]
     */
    public function getIdmolecule(): Collection
    {
        return $this->idmolecule;
    }

    public function addIdmolecule(Molecule $idmolecule): self
    {
        if (!$this->idmolecule->contains($idmolecule)) {
            $this->idmolecule[] = $idmolecule;
        }

        return $this;
    }

    public function removeIdmolecule(Molecule $idmolecule): self
    {
        $this->idmolecule->removeElement($idmolecule);

        return $this;
    }

}
