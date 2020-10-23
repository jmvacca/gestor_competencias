<?php

namespace App\Entity;

use App\Repository\FechaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FechaRepository::class)
 */
class Fecha
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
    private $numero;

    /**
     * @ORM\ManyToOne(targetEntity=CompetenciaDeportiva::class, inversedBy="fecha")
     */
    private $competenciaDeportiva;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCompetenciaDeportiva(): ?CompetenciaDeportiva
    {
        return $this->competenciaDeportiva;
    }

    public function setCompetenciaDeportiva(?CompetenciaDeportiva $competenciaDeportiva): self
    {
        $this->competenciaDeportiva = $competenciaDeportiva;

        return $this;
    }
}
