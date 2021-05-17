<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Molecule
 *
 * @ORM\Table(name="molecule")
 * @ORM\Entity(repositoryClass="App\Repository\MoleculeRepository")
 */
class Molecule
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDMOLECULE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmolecule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLEMOLECULE", type="string", length=32, nullable=true)
     */
    private $libellemolecule;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Medicament", mappedBy="idmolecule")
     */
    private $cip;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cip = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdmolecule(): ?int
    {
        return $this->idmolecule;
    }

    public function getLibellemolecule(): ?string
    {
        return $this->libellemolecule;
    }

    public function setLibellemolecule(?string $libellemolecule): self
    {
        $this->libellemolecule = $libellemolecule;

        return $this;
    }

    /**
     * @return Collection|Medicament[]
     */
    public function getCip(): Collection
    {
        return $this->cip;
    }

    public function addCip(Medicament $cip): self
    {
        if (!$this->cip->contains($cip)) {
            $this->cip[] = $cip;
            $cip->addIdmolecule($this);
        }

        return $this;
    }

    public function removeCip(Medicament $cip): self
    {
        if ($this->cip->removeElement($cip)) {
            $cip->removeIdmolecule($this);
        }

        return $this;
    }

}
