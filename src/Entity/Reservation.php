<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_res = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $heure_res = null;

    #[ORM\Column]
    private ?int $nb_pers = null;

    #[ORM\Column(length: 20)]
    private ?string $statut = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?client $client_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?tableRestaurant $table_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRes(): ?\DateTime
    {
        return $this->date_res;
    }

    public function setDateRes(\DateTime $date_res): static
    {
        $this->date_res = $date_res;

        return $this;
    }

    public function getHeureRes(): ?\DateTime
    {
        return $this->heure_res;
    }

    public function setHeureRes(\DateTime $heure_res): static
    {
        $this->heure_res = $heure_res;

        return $this;
    }

    public function getNbPers(): ?int
    {
        return $this->nb_pers;
    }

    public function setNbPers(int $nb_pers): static
    {
        $this->nb_pers = $nb_pers;

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

    public function getClientId(): ?client
    {
        return $this->client_id;
    }

    public function setClientId(?client $client_id): static
    {
        $this->client_id = $client_id;

        return $this;
    }

    public function getTableId(): ?tableRestaurant
    {
        return $this->table_id;
    }

    public function setTableId(?tableRestaurant $table_id): static
    {
        $this->table_id = $table_id;

        return $this;
    }
}
