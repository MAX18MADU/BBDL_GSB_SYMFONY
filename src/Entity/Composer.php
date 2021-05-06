<?php

namespace App\Entity;

use App\Repository\ComposerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ComposerRepository::class)
 */
class Composer
{
    /**
     * @ORM\CIP
     * @ORM\Column(type="string", length=13)
     */
    private $CIP;

    /**
     * @ORM\IdExcipient
     * @ORM\Column(type="integer")
     */
    private $IdExcipient;

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

    public function getIdExcipient(): ?int
    {
        return $this->IdExcipient;
    }

    public function setIdExcipient(int $IdExcipient): self
    {
        $this->IdExcipient = $IdExcipient;

        return $this;
    }
}
