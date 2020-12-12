<?php

namespace App\Entity;

use App\Repository\FechaRepository;
use Doctrine\Common\Collections\ArrayCollection;
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
     * @ORM\OneToMany(targetEntity=Partido::class, mappedBy="fecha",orphanRemoval=true, cascade={"persist"})
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


    public function getPartidos()
    {
        return $this->partidos;
    }

    public function addPartidos(Partido $partido)
    {
        if (!$this->partidos->contains($partido)) {
            $this->partidos->add($partido);
            $partido->setFecha($this);
        }

        return $this;
    }

    public function removePartidos(Partido $partido)
    {
        if ($this->partidos->removeElement($partido)) {
            // set the owning side to null (unless already changed)
            if ($partido->getFecha() === $this) {
                $partido->setFecha(null);
            }
        }

        return $this;
    }

    public function __construct($numero){
        $this->setNumero($numero);
        $this->partidos = new ArrayCollection();
    }


}
