<?php

namespace App\Entity;

use App\Repository\ResultadoPuntuacionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResultadoPuntuacionRepository::class)
 */
class ResultadoPuntuacion extends Resultado
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $resultadoLocal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $resultadoVisitante;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResultadoLocal(): ?int
    {
        return $this->resultadoLocal;
    }

    public function setResultadoLocal(?int $resultadoLocal): self
    {
        $this->resultadoLocal = $resultadoLocal;

        return $this;
    }

    public function getResultadoVisitante(): ?int
    {
        return $this->resultadoVisitante;
    }

    public function setResultadoVisitante(?int $resultadoVisitante): self
    {
        $this->resultadoVisitante = $resultadoVisitante;

        return $this;
    }
}
