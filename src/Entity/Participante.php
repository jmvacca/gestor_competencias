<?php

namespace App\Entity;

use App\Repository\ParticipanteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=ParticipanteRepository::class)
 *
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
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=180)
     *
     */
    private $email;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $imagenFileName;

    /**
     * @ORM\ManyToOne(targetEntity=CompetenciaDeportiva::class, inversedBy="participante")
     * @ORM\JoinColumn(name="competenciaDeportiva" ,nullable=false, referencedColumnName="id")
     */
    private $competenciaDeportiva;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getNombre();
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
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

    public function setCompetenciaDeportiva( $competenciaDeportiva)
    {
        $this->competenciaDeportiva = $competenciaDeportiva;

        return $this;
    }
}
