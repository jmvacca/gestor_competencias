<?php

namespace App\Entity;

use App\Repository\ModalidadRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModalidadRepository::class)
 */
class Modalidad
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $modalidad;

    public function __toString()
    {
        return $this->getModalidad();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModalidad(): ?string
    {
        return $this->modalidad;
    }

    public function setModalidad(string $modalidad): self
    {
        $this->modalidad = $modalidad;

        return $this;
    }
}
