<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Forme
 *
 * @ORM\Table(name="forme")
 * @ORM\Entity
 */
class Forme
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFORME", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idforme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLEFORME", type="string", length=32, nullable=true)
     */
    private $libelleforme;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Medicament", mappedBy="idforme")
     */
    private $cip;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cip = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdforme(): ?int
    {
        return $this->idforme;
    }

    public function getLibelleforme(): ?string
    {
        return $this->libelleforme;
    }

    public function setLibelleforme(?string $libelleforme): self
    {
        $this->libelleforme = $libelleforme;

        return $this;
    }

    /**
     * @return Collection|Medicament[]
     */
    public function getCip(): Collection
    {
        return $this->cip;
    }

    public function addCip(Medicament $cip): self
    {
        if (!$this->cip->contains($cip)) {
            $this->cip[] = $cip;
            $cip->addIdforme($this);
        }

        return $this;
    }

    public function removeCip(Medicament $cip): self
    {
        if ($this->cip->removeElement($cip)) {
            $cip->removeIdforme($this);
        }

        return $this;
    }

}
