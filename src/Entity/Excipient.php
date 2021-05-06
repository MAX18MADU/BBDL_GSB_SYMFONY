<?php

namespace App\Entity;

use App\Repository\ExcipientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExcipientRepository::class)
 */
class Excipient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LibelleExcipient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleExcipient(): ?string
    {
        return $this->LibelleExcipient;
    }

    public function setLibelleExcipient(string $LibelleExcipient): self
    {
        $this->LibelleExcipient = $LibelleExcipient;

        return $this;
    }
}
