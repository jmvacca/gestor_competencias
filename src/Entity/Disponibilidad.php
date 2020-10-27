<?php

namespace App\Entity;

use App\Repository\DisponibilidadRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DisponibilidadRepository::class)
 */
class Disponibilidad
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $disponibilidad;

    /**
     * @ORM\ManyToOne(targetEntity=CompetenciaDeportiva::class, inversedBy="disponibilidades")
     * @ORM\JoinColumn(nullable=false, name="competenciaDeportiva_id", referencedColumnName="id")
     */
    private $competenciaDeportiva;

    /**
     * @ORM\OneToOne(targetEntity=LugarDeRealizacion::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $lugar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDisponibilidad(): ?int
    {
        return $this->disponibilidad;
    }

    public function setDisponibilidad(int $disponibilidad): self
    {
        $this->disponibilidad = $disponibilidad;

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

    public function getLugar(): ?LugarDeRealizacion
    {
        return $this->lugar;
    }

    public function setLugar(LugarDeRealizacion $lugar): self
    {
        $this->lugar = $lugar;

        return $this;
    }
}
