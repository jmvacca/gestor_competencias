<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaisRepository::class)
 *
 */

class Provincia
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id",type="integer", type="smallint", nullable=false)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50,unique=true)
     */
    private $provincianombre;

    /**
     * @ORM\ManyToOne(targetEntity=Pais::class)
     * @ORM\JoinColumn (nullable=false)
     *
     */
    private $ubicacionpaisid;

    public function getUbicacionpais()
    {
        return $this->ubicacionpaisid;
    }

    public function setUbicacionpais($ubicacionpaisid)
    {
        $this->ubicacionpaisid = $ubicacionpaisid;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getProvincianombre()
    {
        return $this->provincianombre;
    }

    public function setProvincianombre($provincianombre)
    {
        $this->provincianombre = $provincianombre;
    }

}