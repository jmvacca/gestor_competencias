<?php

namespace App\Entity;

use App\Repository\ParticipanteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParticipanteRepository::class)
 */
class Participante
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $imagenFileName;

    /**
     * @ORM\ManyToOne(targetEntity=CompetenciaDeportiva::class, inversedBy="participante")
     * @ORM\JoinColumn(nullable=false)
     */
    private $competenciaDeportiva;

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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getImagenFileName()
    {
        return $this->imagenFileName;
    }

    public function setImagenFileName($imagenFileName)
    {
        $this->imagenFileName = $imagenFileName;

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
