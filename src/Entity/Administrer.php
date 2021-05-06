<?php

namespace App\Entity;

use App\Repository\AdministrerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdministrerRepository::class)
 */
class Administrer
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
     * @ORM\Column(type="integer")
     */
    private $IdForme;

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

    public function getIdForme(): ?int
    {
        return $this->IdForme;
    }

    public function setIdForme(int $IdForme): self
    {
        $this->IdForme = $IdForme;

        return $this;
    }
}
