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
     * @ORM\JoinColumn(nullable=false, name="lugar_id", referencedColumnName="id")
     */
    private $lugar;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return sprintf('%s',$this->getDisponibilidad());
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }

    public function setDisponibilidad(int $disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;

        return $this;
    }

    public function getCompetenciaDeportiva()
    {
        return $this->competenciaDeportiva;
    }

    public function setCompetenciaDeportiva($competenciaDeportiva)
    {
        $this->competenciaDeportiva = $competenciaDeportiva;

        return $this;
    }

    public function getLugar()
    {
        return $this->lugar;
    }

    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }
}
