<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="App\Repository\RoleRepository")
 */
class Role
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDROLE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrole;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLEROLE", type="string", length=32, nullable=true)
     */
    private $libellerole;

    public function getIdrole(): ?int
    {
        return $this->idrole;
    }

    public function getLibellerole(): ?string
    {
        return $this->libellerole;
    }

    public function setLibellerole(?string $libellerole): self
    {
        $this->libellerole = $libellerole;

        return $this;
    }


}
