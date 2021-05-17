<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laboratoire
 *
 * @ORM\Table(name="laboratoire")
 * @ORM\Entity(repositoryClass="App\Repository\LaboratoireRepository")
 */
class Laboratoire
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDLABORATOIRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlaboratoire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RAISONSOCIALE", type="string", length=32, nullable=true)
     */
    private $raisonsociale;

    public function getIdlaboratoire(): ?int
    {
        return $this->idlaboratoire;
    }

    public function getRaisonsociale(): ?string
    {
        return $this->raisonsociale;
    }

    public function setRaisonsociale(?string $raisonsociale): self
    {
        $this->raisonsociale = $raisonsociale;

        return $this;
    }


}
