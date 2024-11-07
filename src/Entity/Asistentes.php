<?php

namespace App\Entity;

use App\Repository\AsistentesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AsistentesRepository::class)]
class Asistentes
{
    #[ORM\Id]
    #[ORM\Column(type: 'string', length: 20)]
    private ?string $dni_asistente = null;

    #[ORM\Column(type: 'string', length: 50)]
    private ?string $tipo = null;

    #[ORM\Column(type: 'string', length: 100)]
    private ?string $nombre = null;

    #[ORM\Column(type: 'string', length: 100)]
    private ?string $apellidos = null;

    #[ORM\Column(type: 'string', length: 100)]
    private ?string $email = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $extra = null;

    public function getDniAsistente(): ?string
    {
        return $this->dni_asistente;
    }

    public function setDniAsistente(string $dni_asistente): static
    {
        $this->dni_asistente = $dni_asistente;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): static
    {
        if (!in_array($tipo, ['Interno', 'Externo'])) {
            throw new \InvalidArgumentException("Tipo inválido");
        }
        $this->tipo = $tipo;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): static
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getExtra(): ?string
    {
        return $this->extra;
    }

    public function setExtra(?string $extra): static
    {
        $this->extra = $extra;

        return $this;
    }
}
