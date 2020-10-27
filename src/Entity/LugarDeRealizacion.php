<?php

namespace App\Entity;

use App\Repository\LugarDeRealizacionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LugarDeRealizacionRepository::class)
 */
class LugarDeRealizacion
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="integer")
     */
    private $codigo;

    /**
     * @ORM\ManyToMany(targetEntity=Deporte::class, inversedBy="lugares")
     */
    private $deportes;

    /**
     * @ORM\ManyToOne(targetEntity=Usuario::class, inversedBy="lugares")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;

    public function __construct()
    {
        $this->deportes = new ArrayCollection();
    }

    public function __toString(): ?string
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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getCodigo(): ?int
    {
        return $this->codigo;
    }

    public function setCodigo(int $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * @return Collection|Deporte[]
     */
    public function getDeportes(): Collection
    {
        return $this->deportes;
    }

    public function addDeporte(Deporte $deporte): self
    {
        if (!$this->deportes->contains($deporte)) {
            $this->deportes[] = $deporte;
        }

        return $this;
    }

    public function removeDeporte(Deporte $deporte): self
    {
        $this->deportes->removeElement($deporte);

        return $this;
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
}
