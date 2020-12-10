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
    private $puntajeLocal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $puntajeVisitante;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numeroDeSet;

    /**
     * @ORM\ManyToOne(targetEntity=ResultadoSets::class, inversedBy="sets")
     */
    private $resultadoSets;

    /**
     * @ORM\ManyToOne(targetEntity=HistorialResultado::class, inversedBy="sets")
     */
    private $historialResultado;

    public function __construct($numeroDeSet){
        $this->setNumeroDeSet($numeroDeSet);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPuntajeLocal(): ?int
    {
        return $this->puntajeLocal;
    }

    public function setPuntajeLocal(?int $puntajeLocal): self
    {
        $this->puntajeLocal = $puntajeLocal;

        return $this;
    }

    public function getPuntajeVisitante(): ?int
    {
        return $this->puntajeVisitante;
    }

    public function setPuntajeVisitante(?int $puntajeVisitante): self
    {
        $this->puntajeVisitante = $puntajeVisitante;

        return $this;
    }

    public function getNumeroDeSet(): ?int
    {
        return $this->numeroDeSet;
    }

    public function setNumeroDeSet(?int $numeroDeSet): self
    {
        $this->numeroDeSet = $numeroDeSet;

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
