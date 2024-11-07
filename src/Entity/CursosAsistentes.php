<?php

namespace App\Entity;

use App\Repository\CursosAsistentesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CursosAsistentesRepository::class)]
#[ORM\Table(name: "Cursos_Asistentes")]
class CursosAsistentes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Cursos::class)]
    #[ORM\JoinColumn(name: "curso_id", referencedColumnName: "curso_id", nullable: false)]
    private ?Cursos $curso_id = null;

    #[ORM\ManyToOne(targetEntity: Asistentes::class)]
    #[ORM\JoinColumn(name: "dni_asistente", referencedColumnName: "dni_asistente", nullable: false)]
    private ?Asistentes $dni_asistente = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_inscripcion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCursoId(): ?Cursos
    {
        return $this->curso_id;
    }

    public function setCursoId(?Cursos $curso_id): static
    {
        $this->curso_id = $curso_id;

        return $this;
    }

    public function getDniAsistente(): ?Asistentes
    {
        return $this->dni_asistente;
    }

    public function setDniAsistente(?Asistentes $dni_asistente): static
    {
        $this->dni_asistente = $dni_asistente;

        return $this;
    }

    public function getFechaInscripcion(): ?\DateTimeInterface
    {
        return $this->fecha_inscripcion;
    }

    public function setFechaInscripcion(?\DateTimeInterface $fecha_inscripcion): static
    {
        $this->fecha_inscripcion = $fecha_inscripcion;

        return $this;
    }
}
