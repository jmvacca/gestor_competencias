<?php

namespace App\Entity;

use App\Repository\ResultadoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;

/**
 * ORM\Entity(repositoryClass=ResultadoRepository::class)
 *
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"resultado" = "Resultado", "resultado_puntuacion" = "ResultadoPuntuacion", "resultado_final" = "ResultadoFinal", "resultado_sets" = "ResultadoSets"})
 *
 */
class Resultado
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ausenteLocal;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ausenteVisitante;

    /**
     * @ORM\ManyToOne(targetEntity=Partido::class, inversedBy="resultado")
     * @ORM\JoinColumn(nullable=false)
     */
    private $partido;

    /**
     * @ORM\OneToMany(targetEntity=HistorialResultado::class, mappedBy="resultado", orphanRemoval=true)
     */
    private $historial;

    public function __construct()
    {
        $this->historial = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAusenteLocal()
    {
        return $this->ausenteLocal;
    }

    public function setAusenteLocal($ausenteLocal)
    {
        $this->ausenteLocal = $ausenteLocal;

        return $this;
    }

    public function getAusenteVisitante()
    {
        return $this->ausenteVisitante;
    }

    public function setAusenteVisitante($ausenteVisitante)
    {
        $this->ausenteVisitante = $ausenteVisitante;

        return $this;
    }

    public function getPartido(): ?Partido
    {
        return $this->partido;
    }

    public function setPartido(?Partido $partido): self
    {
        $this->partido = $partido;

        return $this;
    }

    /**
     * @return Collection|HistorialResultado[]
     */
    public function getHistorial(): Collection
    {
        return $this->historial;
    }

    public function addHistorial(HistorialResultado $historial): self
    {
        if (!$this->historial->contains($historial)) {
            $this->historial[] = $historial;
            $historial->setResultado($this);
        }

        return $this;
    }

    public function removeHistorial(HistorialResultado $historial): self
    {
        if ($this->historial->removeElement($historial)) {
            // set the owning side to null (unless already changed)
            if ($historial->getResultado() === $this) {
                $historial->setResultado(null);
            }
        }

        return $this;
    }
}
