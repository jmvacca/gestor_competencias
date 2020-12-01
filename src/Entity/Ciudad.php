<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CiudadRepository::class)
 *
 */

class Ciudad
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
    private $ciudad_nombre;

    /**
     * @ORM\Column(type="integer", unique=true)
     */
    private $cp;

    /**
     * @ORM\ManyToOne(targetEntity=Provincia::class)
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $provincia_id;

    public function getProvincia()
    {
        return $this->provincia_id;
    }

    public function setProvincia($provincia_id)
    {
        $this->provincia_id = $provincia_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCiudadNombre()
    {
        return $this->ciudad_nombre;
    }

    public function setCiudadNombre($ciudad_nombre)
    {
        $this->ciudad_nombre = $ciudad_nombre;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
    }


}