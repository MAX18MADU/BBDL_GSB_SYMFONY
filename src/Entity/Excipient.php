<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Excipient
 *
 * @ORM\Table(name="excipient")
 * @ORM\Entity
 */
class Excipient
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDEXCIPIENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexcipient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLEEXCIPIENT", type="string", length=32, nullable=true)
     */
    private $libelleexcipient;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Medicament", mappedBy="idexcipient")
     */
    private $cip;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cip = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdexcipient(): ?int
    {
        return $this->idexcipient;
    }

    public function getLibelleexcipient(): ?string
    {
        return $this->libelleexcipient;
    }

    public function setLibelleexcipient(?string $libelleexcipient): self
    {
        $this->libelleexcipient = $libelleexcipient;

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
            $cip->addIdexcipient($this);
        }

        return $this;
    }

    public function removeCip(Medicament $cip): self
    {
        if ($this->cip->removeElement($cip)) {
            $cip->removeIdexcipient($this);
        }

        return $this;
    }

}
