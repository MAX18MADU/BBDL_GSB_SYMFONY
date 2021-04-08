<?php

namespace App\Entity;

use App\Repository\MedicamentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedicamentRepository::class)
 */
class Medicament
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=13)
     */
    private $CIP;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nommedicament;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $grammage;

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

    public function getNommedicament(): ?string
    {
        return $this->Nommedicament;
    }

    public function setNommedicament(string $Nommedicament): self
    {
        $this->Nommedicament = $Nommedicament;

        return $this;
    }

    public function getGrammage(): ?string
    {
        return $this->grammage;
    }

    public function setGrammage(string $grammage): self
    {
        $this->grammage = $grammage;

        return $this;
    }
}
