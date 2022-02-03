<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]

    #[ORM\Column(type: 'string', length: 20)]
    private $Depart;

    #[ORM\Column(type: 'string', length: 20)]
    private $Arriver;

    #[ORM\Column(type: 'date')]
    private $Aller;

    #[ORM\Column(type: 'date')]
    private $Retour;

    #[ORM\Column(type: 'integer')]
    private $Prix;

    #[ORM\Column(type: 'date')]
    private $Date_Reservation;


    public function getDepart(): ?string
    {
        return $this->Depart;
    }

    public function setDepart(string $Depart): self
    {
        $this->Depart = $Depart;

        return $this;
    }

    public function getArriver(): ?string
    {
        return $this->Arriver;
    }

    public function setArriver(string $Arriver): self
    {
        $this->Arriver = $Arriver;

        return $this;
    }

    public function getAller(): ?\DateTimeInterface
    {
        return $this->Aller;
    }

    public function setAller(\DateTimeInterface $Aller): self
    {
        $this->Aller = $Aller;

        return $this;
    }

    public function getRetour(): ?\DateTimeInterface
    {
        return $this->Retour;
    }

    public function setRetour(\DateTimeInterface $Retour): self
    {
        $this->Retour = $Retour;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->Date_Reservation;
    }

    public function setDateReservation(\DateTimeInterface $Date_Reservation): self
    {
        $this->Date_Reservation = $Date_Reservation;

        return $this;
    }
}
