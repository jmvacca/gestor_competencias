<?php

namespace App\Entity;

use App\Repository\DisponibilidadRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\String_;

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
     * @ORM\ManyToOne(targetEntity=LugarDeRealizacion::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $lugar;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return sprintf('%s',$this->getDisponibilidad());
    }

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
