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

    public function getId()
    {
        return $this->id;
    }
}
