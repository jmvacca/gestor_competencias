<?php

namespace App\Entity;

use App\Repository\ResultadoFinalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResultadoFinalRepository::class)
 */
class ResultadoFinal extends Resultado
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
    private $empate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ganadorLocal;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ganadorVisitante;

    public function getId()
    {
        return parent::getId();
    }

    public function getEmpate(): ?bool
    {
        return $this->empate;
    }

    public function setEmpate(?bool $empate): self
    {
        $this->empate = $empate;

        return $this;
    }

    public function getGanadorLocal(): ?bool
    {
        return $this->ganadorLocal;
    }

    public function setGanadorLocal(?bool $ganadorLocal): self
    {
        $this->ganadorLocal = $ganadorLocal;

        return $this;
    }

    public function getGanadorVisitante(): ?bool
    {
        return $this->ganadorVisitante;
    }

    public function setGanadorVisitante(?bool $ganadorVisitante): self
    {
        $this->ganadorVisitante = $ganadorVisitante;

        return $this;
    }
}
