<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
{
    /**
     * @ORM\IdUtilisateur
     * @ORM\Column(type="integer")
     */
    private $IdUtilisateur;

    /**
     * @ORM\Column(type="integer")
     */
    private $IdRole;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Login;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->IdUtilisateur;
    }

    public function setIdUtilisateur(int $IdUtilisateur): self
    {
        $this->IdUtilisateur = $IdUtilisateur;

        return $this;
    }

    public function getIdRole(): ?int
    {
        return $this->IdRole;
    }

    public function setIdRole(int $IdRole): self
    {
        $this->IdRole = $IdRole;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    public function setLogin(string $Login): self
    {
        $this->Login = $Login;

        return $this;
    }
}
