<?php

namespace App\Entity;

use App\Repository\TableRestaurantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TableRestaurantRepository::class)]
class TableRestaurant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $numero = null;

    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\Column(length: 20)]
    private ?string $type_table = null;

    #[ORM\Column(length: 20)]
    private ?string $statut = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $emplacement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getTypeTable(): ?string
    {
        return $this->type_table;
    }

    public function setTypeTable(string $type_table): static
    {
        $this->type_table = $type_table;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(?string $emplacement): static
    {
        $this->emplacement = $emplacement;

        return $this;
    }
}
