<?php

namespace App\Entity;

use App\Repository\DeporteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeporteRepository::class)
 */
class Deporte
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
     * @ORM\ManyToMany(targetEntity=LugarDeRealizacion::class, mappedBy="deportes")
     */
    private $lugares;

    public function __toString()
    {
        return $this->getNombre();
    }

    public function __construct()
    {
        $this->lugares = new ArrayCollection();
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

    /**
     * @return Collection|LugarDeRealizacion[]
     */
    public function getLugares(): Collection
    {
        return $this->lugares;
    }

    public function addLugare(LugarDeRealizacion $lugare): self
    {
        if (!$this->lugares->contains($lugare)) {
            $this->lugares[] = $lugare;
            $lugare->addDeporte($this);
        }

        return $this;
    }

    public function removeLugare(LugarDeRealizacion $lugare): self
    {
        if ($this->lugares->removeElement($lugare)) {
            $lugare->removeDeporte($this);
        }

        return $this;
    }
}
