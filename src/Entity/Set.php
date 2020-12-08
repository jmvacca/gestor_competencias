<?php

namespace App\Entity;

use App\Repository\SetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SetRepository::class)
 * @ORM\Table(name="`set`")
 */
class Set
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $puntaje_local;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $puntaje_visitante;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numero_de_set;

    /**
     * @ORM\ManyToOne(targetEntity=ResultadoSets::class, inversedBy="sets")
     */
    private $resultadoSets;

    /**
     * @ORM\ManyToOne(targetEntity=HistorialResultado::class, inversedBy="sets")
     */
    private $historialResultado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPuntajeLocal(): ?int
    {
        return $this->puntaje_local;
    }

    public function setPuntajeLocal(?int $puntaje_local): self
    {
        $this->puntaje_local = $puntaje_local;

        return $this;
    }

    public function getPuntajeVisitante(): ?int
    {
        return $this->puntaje_visitante;
    }

    public function setPuntajeVisitante(?int $puntaje_visitante): self
    {
        $this->puntaje_visitante = $puntaje_visitante;

        return $this;
    }

    public function getNumeroDeSet(): ?int
    {
        return $this->numero_de_set;
    }

    public function setNumeroDeSet(?int $numero_de_set): self
    {
        $this->numero_de_set = $numero_de_set;

        return $this;
    }

    public function getResultadoSets(): ?ResultadoSets
    {
        return $this->resultadoSets;
    }

    public function setResultadoSets(?ResultadoSets $resultadoSets): self
    {
        $this->resultadoSets = $resultadoSets;

        return $this;
    }

    public function getHistorialResultado(): ?HistorialResultado
    {
        return $this->historialResultado;
    }

    public function setHistorialResultado(?HistorialResultado $historialResultado): self
    {
        $this->historialResultado = $historialResultado;

        return $this;
    }
}
