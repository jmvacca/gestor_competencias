<?php

namespace App\Entity;

use App\Repository\ResultadoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResultadoRepository::class)
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
    private $resultado_local;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $resultado_visitante;

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

    public function getResultadoLocal()
    {
        return $this->resultado_local;
    }

    public function setResultadoLocal( $resultado_local)
    {
        $this->resultado_local = $resultado_local;

        return $this;
    }

    public function getResultadoVisitante()
    {
        return $this->resultado_visitante;
    }

    public function setResultadoVisitante( $resultado_visitante)
    {
        $this->resultado_visitante = $resultado_visitante;

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
