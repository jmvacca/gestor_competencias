<?php

namespace App\Entity;

use App\Repository\HistorialResultadoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HistorialResultadoRepository::class)
 */
class HistorialResultado
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ausenteLocal;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ausenteVisitante;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="boolean")
     */
    private $empate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ganadorLocal;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ganadorVisitante;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $resultadoLocal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $resultadoVisitante;

    /**
     * @ORM\ManyToOne(targetEntity=Resultado::class, inversedBy="historial")
     * @ORM\JoinColumn(nullable=false)
     */
    private $resultado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAusenteLocal(): ?bool
    {
        return $this->ausenteLocal;
    }

    public function setAusenteLocal(bool $ausenteLocal): self
    {
        $this->ausenteLocal = $ausenteLocal;

        return $this;
    }

    public function getAusenteVisitante(): ?bool
    {
        return $this->ausenteVisitante;
    }

    public function setAusenteVisitante(bool $ausenteVisitante): self
    {
        $this->ausenteVisitante = $ausenteVisitante;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getEmpate(): ?bool
    {
        return $this->empate;
    }

    public function setEmpate(bool $empate): self
    {
        $this->empate = $empate;

        return $this;
    }

    public function getGanadorLocal(): ?bool
    {
        return $this->ganadorLocal;
    }

    public function setGanadorLocal(?bool $ganadorLocal): self
    {
        $this->ganadorLocal = $ganadorLocal;

        return $this;
    }

    public function getGanadorVisitante(): ?bool
    {
        return $this->ganadorVisitante;
    }

    public function setGanadorVisitante(?bool $ganadorVisitante): self
    {
        $this->ganadorVisitante = $ganadorVisitante;

        return $this;
    }

    public function getResultadoLocal(): ?int
    {
        return $this->resultadoLocal;
    }

    public function setResultadoLocal(?int $resultadoLocal): self
    {
        $this->resultadoLocal = $resultadoLocal;

        return $this;
    }

    public function getResultadoVisitante(): ?int
    {
        return $this->resultadoVisitante;
    }

    public function setResultadoVisitante(?int $resultadoVisitante): self
    {
        $this->resultadoVisitante = $resultadoVisitante;

        return $this;
    }

    public function getResultado(): ?Resultado
    {
        return $this->resultado;
    }

    public function setResultado(?Resultado $resultado): self
    {
        $this->resultado = $resultado;

        return $this;
    }
}
