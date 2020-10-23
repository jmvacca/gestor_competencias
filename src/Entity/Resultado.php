<?php

namespace App\Entity;

use App\Repository\ResultadoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResultadoRepository::class)
 */
class Resultado
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $resultado_local;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $resultado_visitante;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResultadoLocal(): ?bool
    {
        return $this->resultado_local;
    }

    public function setResultadoLocal(?bool $resultado_local): self
    {
        $this->resultado_local = $resultado_local;

        return $this;
    }

    public function getResultadoVisitante(): ?bool
    {
        return $this->resultado_visitante;
    }

    public function setResultadoVisitante(?bool $resultado_visitante): self
    {
        $this->resultado_visitante = $resultado_visitante;

        return $this;
    }
}
