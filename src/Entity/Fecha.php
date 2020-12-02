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

    /**
     * @ORM\OneToMany(targetEntity=Partido::class, mappedBy="fecha")
     */
    private $partidos;

    public function getId()
    {
        return $this->id;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

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
}
