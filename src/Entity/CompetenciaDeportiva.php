<?php

namespace App\Entity;

use App\Repository\CompetenciaDeportivaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=CompetenciaDeportivaRepository::class)
 * @UniqueEntity(fields="nombre",
 *     message="Nombre ya en uso.")
 */
class CompetenciaDeportiva
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id",type="integer", type="smallint", nullable=false)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,unique=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $reglamento;

    /**
     * @ORM\Column(type="boolean")
     */
    private $permiteEmpate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $puntosEmpate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $puntosPartidoGanado;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $puntosPorPresentarse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cantidadMaximaSet;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechaBaja;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $horaBaja;

    /**
     * @ORM\OneToMany(targetEntity=Fecha::class, mappedBy="competenciaDeportiva")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity=Modalidad::class)
     * @ORM\JoinColumn(name="modalidad", referencedColumnName="id")
     */
    private $modalidad;

    /**
     * @ORM\ManyToOne(targetEntity=Estado::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity=Deporte::class)
     * @ORM\JoinColumn(name="deporte", referencedColumnName="id")
     */
    private $deporte;

    /**
     * @ORM\OneToMany(targetEntity=Participante::class, mappedBy="competenciaDeportiva", orphanRemoval=true)
     */
    private $participante;

    /**
     * @ORM\OneToMany(targetEntity=Disponibilidad::class, mappedBy="competenciaDeportiva", orphanRemoval=true, cascade={"persist"})
     */
    private $disponibilidades;

    /**
     * @ORM\ManyToOne(targetEntity=Usuario::class, inversedBy="competencias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $puntosPorNoPresentarse;

    public function __construct()
    {
        $this->fecha = new ArrayCollection();
        $this->participante = new ArrayCollection();
        $this->disponibilidades = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getReglamento()
    {
        return $this->reglamento;
    }

    public function setReglamento( $reglamento)
    {
        $this->reglamento = $reglamento;

        return $this;
    }

    public function getPermiteEmpate()
    {
        return $this->permiteEmpate;
    }

    public function setPermiteEmpate( $permiteEmpate)
    {
        $this->permiteEmpate = $permiteEmpate;

        return $this;
    }

    public function getPuntosEmpate()
    {
        return $this->puntosEmpate;
    }

    public function setPuntosEmpate($puntosEmpate)
    {
        $this->puntosEmpate = $puntosEmpate;

        return $this;
    }

    public function getPuntosPartidoGanado()
    {
        return $this->puntosPartidoGanado;
    }

    public function setPuntosPartidoGanado( $puntosPartidoGanado)
    {
        $this->puntosPartidoGanado = $puntosPartidoGanado;

        return $this;
    }

    public function getPuntosPorPresentarse()
    {
        return $this->puntosPorPresentarse;
    }

    public function setPuntosPorPresentarse( $puntosPorPresentarse)
    {
        $this->puntosPorPresentarse = $puntosPorPresentarse;

        return $this;
    }

    public function getCantidadMaximaSet()
    {
        return $this->cantidadMaximaSet;
    }

    public function setCantidadMaximaSet( $cantidadMaximaSet)
    {
        $this->cantidadMaximaSet = $cantidadMaximaSet;

        return $this;
    }

    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    public function setFechaBaja(  $fechaBaja) 
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    public function getHoraBaja()  
    {
        return $this->horaBaja;
    }

    public function setHoraBaja(  $horaBaja) 
    {
        $this->horaBaja = $horaBaja;

        return $this;
    }

    /**
     * @return Collection|Fecha[]
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    public function addFecha(Fecha $fecha) 
    {
        if (!$this->fecha->contains($fecha)) {
            $this->fecha[] = $fecha;
            $fecha->setCompetenciaDeportiva($this);
        }

        return $this;
    }

    public function removeFecha(Fecha $fecha) 
    {
        if ($this->fecha->removeElement($fecha)) {
            // set the owning side to null (unless already changed)
            if ($fecha->getCompetenciaDeportiva() === $this) {
                $fecha->setCompetenciaDeportiva(null);
            }
        }

        return $this;
    }

    public function getModalidad()
    {
        return $this->modalidad;
    }

    public function setModalidad( $modalidad)
    {
        $this->modalidad = $modalidad;

        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado( $estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function getDeporte()
    {
        return $this->deporte;
    }

    public function setDeporte($deporte)
    {
        $this->deporte = $deporte;

        return $this;
    }

    /**
     * @return Collection|Participante[]
     */
    public function getParticipante()
    {
        return $this->participante;
    }

    public function addParticipante(Participante $participante) 
    {
        if (!$this->participante->contains($participante)) {
            $this->participante->add($participante);
            $participante->setCompetenciaDeportiva($this);
        }

        return $this;
    }

    public function removeParticipante(Participante $participante) 
    {
        if ($this->participante->removeElement($participante)) {
            // set the owning side to null (unless already changed)
            if ($participante->getCompetenciaDeportiva() === $this) {
                $participante->setCompetenciaDeportiva(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Disponibilidad[]
     */
    public function getDisponibilidades()
    {
        return $this->disponibilidades;
    }

    public function addDisponibilidade(Disponibilidad $disponibilidade)
    {
        if (!$this->disponibilidades->contains($disponibilidade)) {
            $this->disponibilidades->add($disponibilidade);
            $disponibilidade->setCompetenciaDeportiva($this);
        }

        return $this;
    }

    public function removeDisponibilidade(Disponibilidad $disponibilidade) 
    {
        if ($this->disponibilidades->removeElement($disponibilidade)) {
            // set the owning side to null (unless already changed)
            if ($disponibilidade->getCompetenciaDeportiva() === $this) {
                $disponibilidade->setCompetenciaDeportiva(null);
            }
        }

        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario( $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getPuntosPorNoPresentarse()
    {
        return $this->puntosPorNoPresentarse;
    }

    public function setPuntosPorNoPresentarse( $puntosPorNoPresentarse)
    {
        $this->puntosPorNoPresentarse = $puntosPorNoPresentarse;

        return $this;
    }
}
