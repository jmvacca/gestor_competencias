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
     * @ORM\OneToMany(targetEntity=Fecha::class, mappedBy="competenciaDeportiva",orphanRemoval=true, cascade={"persist"})
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
     * @ORM\OneToMany(targetEntity=Participante::class, mappedBy="competenciaDeportiva", orphanRemoval=true , cascade={"persist"})
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

    /**
     * @ORM\Column(name="forma_puntuacion", type="string", columnDefinition="enum('TIPO_SETS', 'TIPO_PUNTUACION', 'TIPO_FINAL')")
     */
    private $formaPuntuacion;

    public function getFormaPuntuacion()
    {
        return $this->formaPuntuacion;
    }

    public function setFormaPuntuacion($formaPuntuacion)
    {
        $this->formaPuntuacion = $formaPuntuacion;
    }

    public function __construct()
    {
        $this->fecha = new ArrayCollection();
        $this->participante = new ArrayCollection();
        $this->disponibilidades = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getReglamento(): ?string
    {
        return $this->reglamento;
    }

    public function setReglamento(?string $reglamento): self
    {
        $this->reglamento = $reglamento;

        return $this;
    }

    public function getPermiteEmpate(): ?bool
    {
        return $this->permiteEmpate;
    }

    public function setPermiteEmpate(bool $permiteEmpate): self
    {
        $this->permiteEmpate = $permiteEmpate;

        return $this;
    }

    public function getPuntosEmpate(): ?int
    {
        return $this->puntosEmpate;
    }

    public function setPuntosEmpate(?int $puntosEmpate): self
    {
        $this->puntosEmpate = $puntosEmpate;

        return $this;
    }

    public function getPuntosPartidoGanado(): ?int
    {
        return $this->puntosPartidoGanado;
    }

    public function setPuntosPartidoGanado(?int $puntosPartidoGanado): self
    {
        $this->puntosPartidoGanado = $puntosPartidoGanado;

        return $this;
    }

    public function getPuntosPorPresentarse(): ?int
    {
        return $this->puntosPorPresentarse;
    }

    public function setPuntosPorPresentarse(?int $puntosPorPresentarse): self
    {
        $this->puntosPorPresentarse = $puntosPorPresentarse;

        return $this;
    }

    public function getCantidadMaximaSet(): ?int
    {
        return $this->cantidadMaximaSet;
    }

    public function setCantidadMaximaSet(?int $cantidadMaximaSet): self
    {
        $this->cantidadMaximaSet = $cantidadMaximaSet;

        return $this;
    }

    public function getFechaBaja(): ?\DateTimeInterface
    {
        return $this->fechaBaja;
    }

    public function setFechaBaja(?\DateTimeInterface $fechaBaja): self
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    public function getHoraBaja(): ?\DateTimeInterface
    {
        return $this->horaBaja;
    }

    public function setHoraBaja(?\DateTimeInterface $horaBaja): self
    {
        $this->horaBaja = $horaBaja;

        return $this;
    }

    /**
     * @return Collection|Fecha[]
     */
    public function getFecha(): Collection
    {
        return $this->fecha;
    }

    public function addFecha(Fecha $fecha): self
    {
        if (!$this->fecha->contains($fecha)) {
            $this->fecha[] = $fecha;
            $fecha->setCompetenciaDeportiva($this);
        }

        return $this;
    }

    public function removeFecha(Fecha $fecha): self
    {
        if ($this->fecha->removeElement($fecha)) {
            // set the owning side to null (unless already changed)
            if ($fecha->getCompetenciaDeportiva() === $this) {
                $fecha->setCompetenciaDeportiva(null);
            }
        }

        return $this;
    }

    public function getModalidad(): ?Modalidad
    {
        return $this->modalidad;
    }

    public function setModalidad(?Modalidad $modalidad): self
    {
        $this->modalidad = $modalidad;

        return $this;
    }

    public function getEstado(): ?Estado
    {
        return $this->estado;
    }

    public function setEstado(?Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getDeporte(): ?Deporte
    {
        return $this->deporte;
    }

    public function setDeporte(?Deporte $deporte): self
    {
        $this->deporte = $deporte;

        return $this;
    }

    /**
     * @return Collection|Participante[]
     */
    public function getParticipante(): Collection
    {
        return $this->participante;
    }

    public function addParticipante(Participante $participante): self
    {
        if (!$this->participante->contains($participante)) {
            $this->participante->add($participante);
            $participante->setCompetenciaDeportiva($this);
        }

        return $this;
    }

    public function removeParticipante(Participante $participante): self
    {
        if ($this->participante->removeElement($participante)) {
            // set the owning side to null (unless already changed)
            if ($participante->getCompetenciaDeportiva() === $this) {
                $participante->setCompetenciaDeportiva(null);
            }
        }

        return $this;
    }


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
    }

    public function removeDisponibilidade(Disponibilidad $disponibilidade)
    {
        if ($this->disponibilidades->removeElement($disponibilidade)) {
            // set the owning side to null (unless already changed)
            if ($disponibilidade->getCompetenciaDeportiva() === $this) {
                $disponibilidade->setCompetenciaDeportiva(null);
            }
        }
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getPuntosPorNoPresentarse(): ?int
    {
        return $this->puntosPorNoPresentarse;
    }

    public function setPuntosPorNoPresentarse(?int $puntosPorNoPresentarse): self
    {
        $this->puntosPorNoPresentarse = $puntosPorNoPresentarse;

        return $this;
    }

    /**
     * @return int
     * Retorna el valor de la fecha actual sin resultados.<br>
     * En caso de no haber fechas creadas, retorna -1.<br>
     * En caso de que no haya fechas sin resultados retorna -2.<br>
     *
     */
    public function fechaActual()
    {
        $fechas = $this->getFecha();
        if($fechas->isEmpty()){
            $nroFecha = -1;
        }else{
            $partidos_sin_resultado = true;
            foreach ($fechas as $fecha){

                $partidos = $fecha->getPartidos();
                foreach ($partidos as $partido){
                    if ($partido->getResultado() and !($partido->getResultado()->isEmpty())){
                        $partidos_sin_resultado = false;
                        break;
                    }
                }
                if($partidos_sin_resultado){
                    $nroFecha = $fecha->getNumero();
                    break;
                }else{

                    $nroFecha = -2;
                    $partidos_sin_resultado=true;
                }
            }
        }
        return $nroFecha;
    }
}
