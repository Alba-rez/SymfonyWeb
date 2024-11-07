<?php

namespace App\Entity;

use App\Repository\CertificadosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CertificadosRepository::class)]
class Certificados
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (type: 'integer')]
    private ?int $certificado_id = null;

    #[ORM\ManyToOne(targetEntity: Empleado::class)]
    #[ORM\JoinColumn(name: "dni_empleado", referencedColumnName: "dni_empleado", nullable: false)]
    private ?Empleado $dni_empleado = null;

    #[ORM\ManyToOne(targetEntity: Cursos::class)]
    #[ORM\JoinColumn(name: "curso_id", referencedColumnName: "curso_id", nullable: false)]
    private ?Cursos $curso_id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_emision = null;

    #[ORM\Column(type: 'string', length: 50, options: ['default' => 'Pendiente'])]
    private string $estado = 'Pendiente';


    public function getCertificadoId(): ?int
    {
        return $this->certificado_id;
    }

    public function setCertificadoId(int $certificado_id): static
    {
        $this->certificado_id = $certificado_id;

        return $this;
    }

    public function getDniEmpleado(): ?Empleado
    {
        return $this->dni_empleado;
    }

    public function setDniEmpleado(string $dni_empleado): static
    {
        $this->dni_empleado = $dni_empleado;

        return $this;
    }

    public function getCursoId(): ?Cursos
    {
        return $this->curso_id;
    }

    public function setCursoId(string $curso_id): static
    {
        $this->dni_empleado = $curso_id;

        return $this;
    }
    
    public function getFechaInscripcion(): ?\DateTimeInterface
    {
        return $this->fecha_emision;
    }

    public function setFechaInscripcion(?\DateTimeInterface $fecha_emision): static
    {
        $this->fecha_emision = $fecha_emision;

        return $this;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): static
    {
        if (!in_array($estado, ['Pendiente', 'Emitido', 'Revocado'])) {
            throw new \InvalidArgumentException("Estado inválido");
        }
        $this->estado = $estado;

        return $this;
    }
}
