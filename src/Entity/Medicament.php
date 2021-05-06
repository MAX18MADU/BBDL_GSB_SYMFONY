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
     * @ORM\CIP
     * @ORM\Column(type="string", length="13")
     */
    private $CIP;

    /**
     * @ORM\Column(type="string", length=38)
     */
    private $NomMedicament;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $grammage;

    /**
     * @ORM\Column(type="integer")
     */
    private $IdLaboratoire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCIP(): ?int
    {
        return $this->CIP;
    }

    public function setCIP(int $CIP): self
    {
        $this->CIP = $CIP;

        return $this;
    }

    public function getNomMedicament(): ?string
    {
        return $this->NomMedicament;
    }

    public function setNomMedicament(string $NomMedicament): self
    {
        $this->NomMedicament = $NomMedicament;

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

    public function getIdLaboratoire(): ?int
    {
        return $this->IdLaboratoire;
    }

    public function setIdLaboratoire(int $IdLaboratoire): self
    {
        $this->IdLaboratoire = $IdLaboratoire;

        return $this;
    }
}
