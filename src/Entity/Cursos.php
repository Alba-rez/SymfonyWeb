<?php

namespace App\Entity;

use App\Repository\CursosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CursosRepository::class)]
#[ORM\Table(name: "Cursos")]
class Cursos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $curso_id = null; // Este es el campo clave primaria.

    #[ORM\Column(type: 'integer', unique: true)]
    private ?int $cod_curso = null;

    #[ORM\Column(type: 'string', columnDefinition: "ENUM('Interno', 'Externo')")]
    private ?string $tipo = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(nullable: true)]
    private ?int $horas = null;

    #[ORM\Column(nullable: true)]
    private ?int $dias_semana = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $organiza = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lugar = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_inicio = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_fin = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(type: 'boolean', options: ['default' => 0])]
    private ?bool $publicado = null;

    #[ORM\Column(type: 'boolean', options: ['default' => 0])]
    private ?bool $verificado = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $extra = null;


    public function getCursoId(): ?int
    {
        return $this->curso_id;
    }

    public function setCursoId(int $curso_id): static
    {
        $this->curso_id = $curso_id;

        return $this;
    }

    public function getCodCurso(): ?int
    {
        return $this->cod_curso;
    }

    public function setCodCurso(int $cod_curso): static
    {
        $this->cod_curso = $cod_curso;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): static
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getHoras(): ?int
    {
        return $this->horas;
    }

    public function setHoras(?int $horas): static
    {
        $this->horas = $horas;

        return $this;
    }

    public function getDiasSemana(): ?int
    {
        return $this->dias_semana;
    }

    public function setDiasSemana(?int $dias_semana): static
    {
        $this->dias_semana = $dias_semana;

        return $this;
    }

    public function getOrganiza(): ?string
    {
        return $this->organiza;
    }

    public function setOrganiza(?string $organiza): static
    {
        $this->organiza = $organiza;

        return $this;
    }

    public function getLugar(): ?string
    {
        return $this->lugar;
    }

    public function setLugar(?string $lugar): static
    {
        $this->lugar = $lugar;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fecha_inicio;
    }

    public function setFechaInicio(?\DateTimeInterface $fecha_inicio): static
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fecha_fin;
    }

    public function setFechaFin(?\DateTimeInterface $fecha_fin): static
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function isPublicado(): ?bool
    {
        return $this->publicado;
    }

    public function setPublicado(?bool $publicado): static
    {
        $this->publicado = $publicado;

        return $this;
    }

    public function isVerificado(): ?bool
    {
        return $this->verificado;
    }

    public function setVerificado(?bool $verificado): static
    {
        $this->verificado = $verificado;

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
