<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UsuarioRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class Usuario implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $apellido;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero_documento;

    /**
     * @ORM\OneToMany(targetEntity=CompetenciaDeportiva::class, mappedBy="usuario", orphanRemoval=true)
     */
    private $competencias;

    /**
     * @ORM\ManyToOne(targetEntity=TipoDocumento::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $tipo_documento;

    /**
     * @ORM\OneToMany(targetEntity=LugarDeRealizacion::class, mappedBy="usuario", orphanRemoval=true)
     */
    private $lugares;

    public function __toString()
    {
        return $this->getNombre();
    }

    public function __construct()
    {
        $this->competencias = new ArrayCollection();
        $this->lugares = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getNumeroDocumento(): ?int
    {
        return $this->numero_documento;
    }

    public function setNumeroDocumento(int $numero_documento): self
    {
        $this->numero_documento = $numero_documento;

        return $this;
    }

    public function getCatc(): ?bool
    {
        return $this->catc;
    }

    public function setCatc(bool $catc): self
    {
        $this->catc = $catc;

        return $this;
    }

    /**
     * @return Collection|CompetenciaDeportiva[]
     */
    public function getCompetencias(): Collection
    {
        return $this->competencias;
    }

    public function addCompetencia(CompetenciaDeportiva $competencia): self
    {
        if (!$this->competencias->contains($competencia)) {
            $this->competencias[] = $competencia;
            $competencia->setUsuario($this);
        }

        return $this;
    }

    public function removeCompetencia(CompetenciaDeportiva $competencia): self
    {
        if ($this->competencias->removeElement($competencia)) {
            // set the owning side to null (unless already changed)
            if ($competencia->getUsuario() === $this) {
                $competencia->setUsuario(null);
            }
        }

        return $this;
    }

    public function getTipoDocumento(): ?TipoDocumento
    {
        return $this->tipo_documento;
    }

    public function setTipoDocumento(?TipoDocumento $tipo_documento): self
    {
        $this->tipo_documento = $tipo_documento;

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
            $lugare->setUsuario($this);
        }

        return $this;
    }

    public function removeLugare(LugarDeRealizacion $lugare): self
    {
        if ($this->lugares->removeElement($lugare)) {
            // set the owning side to null (unless already changed)
            if ($lugare->getUsuario() === $this) {
                $lugare->setUsuario(null);
            }
        }

        return $this;
    }


}
