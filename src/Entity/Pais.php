<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaisRepository::class)
 *
 */

class Pais
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
    private $paisnombre;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPaisnombre()
    {
        return $this->paisnombre;
    }

    public function setPaisnombre($paisnombre)
    {
        $this->paisnombre = $paisnombre;
    }


}