<?php

namespace App\Entity;

use App\Repository\UtulisateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtulisateurRepository::class)]
class Utulisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $utulisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtulisateur(): ?string
    {
        return $this->utulisateur;
    }

    public function setUtulisateur(?string $utulisateur): static
    {
        $this->utulisateur = $utulisateur;

        return $this;
    }
}
