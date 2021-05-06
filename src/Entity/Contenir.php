<?php

namespace App\Entity;

use App\Repository\ContenirRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContenirRepository::class)
 */
class Contenir
{
    /**
     * @ORM\CIP
     * @ORM\Column(type="string", length=13)
     */
    private $CIP;

    /**
     * @ORM\IdMolecule
     * @ORM\Column(type="integer")
     */
    private $IdMolecule;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCIP(): ?string
    {
        return $this->CIP;
    }

    public function setCIP(string $CIP): self
    {
        $this->CIP = $CIP;

        return $this;
    }

    public function getIdMolecule(): ?int
    {
        return $this->IdMolecule;
    }

    public function setIdMolecule(int $IdMolecule): self
    {
        $this->IdMolecule = $IdMolecule;

        return $this;
    }
}
