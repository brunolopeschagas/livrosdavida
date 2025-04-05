<?php

namespace App\Entity;

use App\Repository\LivroRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivroRepository::class)]
class Livro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nome = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $autor = null;

    #[ORM\Column(nullable: true)]
    private ?int $nota = null;

    #[ORM\Column(nullable: true)]
    private ?bool $lido = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dataLeitura = null;

    #[ORM\ManyToOne(User::class)]
    private User $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(?string $autor): static
    {
        $this->autor = $autor;

        return $this;
    }

    public function getNota(): ?int
    {
        return $this->nota;
    }

    public function setNota(?int $nota): static
    {
        $this->nota = $nota;

        return $this;
    }

    public function isLido(): ?bool
    {
        return $this->lido;
    }

    public function setLido(bool $lido): static
    {
        $this->lido = $lido;

        return $this;
    }

    public function getDataLeitura(): ?\DateTimeInterface
    {
        return $this->dataLeitura;
    }

    public function setDataLeitura(\DateTimeInterface $dataLeitura): static
    {
        $this->dataLeitura = $dataLeitura;

        return $this;
    }

    public function getUser(): User{
        return $this->user;
    }

    public function setUser(User $user):self{
        $this->user = $user;
        return $this;
    }
}
