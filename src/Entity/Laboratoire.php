<?php

namespace App\Entity;

use App\Repository\LaboratoireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LaboratoireRepository::class)
 */
class Laboratoire
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
    private $RaisonSociale;

    
    public function getId(): ?int
    {
        return $this->id;
    }

    
    public function getRaisonSociale(): ?string
    {
        return $this->RaisonSociale;
    }

    
    public function setRaisonSociale(string $RaisonSociale): self
    {
        $this->RaisonSociale = $RaisonSociale;

        return $this;
    }
}
