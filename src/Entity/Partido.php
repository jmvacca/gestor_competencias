<?php

namespace App\Entity;

use App\Repository\PartidoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PartidoRepository::class)
 */
class Partido
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=LugarDeRealizacion::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $lugar;

    /**
     * @ORM\ManyToOne(targetEntity=Fecha::class)
     * @ORM\JoinColumn (nullable=false)
     */
    private $fecha;

/**
* @ORM\ManyToOne(targetEntity=Participante::class)
* @ORM\JoinColumn (nullable=false)
*/
    private $participante_local;

/**
* @ORM\ManyToOne(targetEntity=Participante::class)
* @ORM\JoinColumn (nullable=false)
*/
    private $participante_visitante;

    public function getId()
    {
        return $this->id;
    }

    public function getLugar()
    {
        return $this->lugar;
    }

    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getParticipanteLocal()
    {
        return $this->participante_local;
    }

    public function setParticipanteLocal($participante_local)
    {
        $this->participante_local = $participante_local;
    }

    public function getParticipanteVisitante()
    {
        return $this->participante_visitante;
    }

    public function setParticipanteVisitante($participante_visitante)
    {
        $this->participante_visitante = $participante_visitante;
    }


    public function __construct($participante_local, $participante_visitante, $lugar){
        $this->setParticipanteLocal($participante_local);
        $this->setParticipanteVisitante($participante_visitante);
        $this->setLugar($lugar);
    }
}
