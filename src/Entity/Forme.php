<?php

namespace App\Entity;

use App\Repository\FormeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormeRepository::class)
 */
class Forme
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=38)
     */
    private $LibelleForme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleForme(): ?string
    {
        return $this->LibelleForme;
    }

    public function setLibelleForme(string $LibelleForme): self
    {
        $this->LibelleForme = $LibelleForme;

        return $this;
    }
}
