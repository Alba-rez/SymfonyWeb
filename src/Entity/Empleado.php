<?php

namespace App\Entity;

use App\Repository\EmpleadoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpleadoRepository::class)]
class Empleado
{
    #[ORM\Id]
    #[ORM\Column(type: Types::STRING, length: 20)]
    private string $dni_empleado;

    #[ORM\Column(type: Types::STRING, length: 50)]
    private string $codigo_empleado;

    #[ORM\Column(type: Types::STRING, length: 50)]
    private string $tipo_usuario;

    #[ORM\Column(type: Types::STRING, length: 100)]
    private string $nombre;

    #[ORM\Column(type: Types::STRING, length: 100)]
    private string $apellidos;

    #[ORM\Column(type: Types::STRING, length: 100)]
    private string $email;

    #[ORM\Column(type: Types::STRING, length: 50)]
    private string $departamento;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_incorporacion = null;

    #[ORM\Column(type: Types::STRING, length: 100, nullable: true)]
    private ?string $puesto = null;

    #[ORM\Column(type: Types::STRING, length: 50, options: ['default' => 'Activo'])]
    private string $estado = 'Activo';

    #[ORM\Column(type: Types::STRING, length: 50)]
    private string $rol;

    // Métodos getters y setters para cada propiedad...

    public function getTipoUsuario(): string
    {
        return $this->tipo_usuario;
    }

    public function setTipoUsuario(string $tipo_usuario): static
    {
        if (!in_array($tipo_usuario, ['Administrador', 'Estándar'])) {
            throw new \InvalidArgumentException("Tipo de usuario inválido");
        }
        $this->tipo_usuario = $tipo_usuario;

        return $this;
    }

    public function getDepartamento(): string
    {
        return $this->departamento;
    }

    public function setDepartamento(string $departamento): static
    {
        $departamentos_validos = [
            'Dirección', 'Secretaría y Administración', 'Sistemas', 'Comunicaciones', 
            'Aplicaciones', 'GIS', 'e-Learning', 'Transferencia de Tecnología', 
            'Promoción y Comunicación', 'Conserjería'
        ];

        if (!in_array($departamento, $departamentos_validos)) {
            throw new \InvalidArgumentException("Departamento inválido");
        }
        $this->departamento = $departamento;

        return $this;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): static
    {
        if (!in_array($estado, ['Activo', 'Inactivo'])) {
            throw new \InvalidArgumentException("Estado inválido");
        }
        $this->estado = $estado;

        return $this;
    }

    public function getRol(): string
    {
        return $this->rol;
    }

    public function setRol(string $rol): static
    {
        if (!in_array($rol, ['Empleado', 'Administrador'])) {
            throw new \InvalidArgumentException("Rol inválido");
        }
        $this->rol = $rol;

        return $this;
    }
}

