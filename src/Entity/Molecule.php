<?php

namespace App\Entity;

use App\Repository\MoleculeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MoleculeRepository::class)
 */
class Molecule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idmolecule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libellemolecule;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdmolecule(): ?int
    {
        return $this->idmolecule;
    }

    public function setIdmolecule(int $idmolecule): self
    {
        $this->idmolecule = $idmolecule;

        return $this;
    }

    public function getLibellemolecule(): ?string
    {
        return $this->libellemolecule;
    }

    public function setLibellemolecule(string $libellemolecule): self
    {
        $this->libellemolecule = $libellemolecule;

        return $this;
    }
}
