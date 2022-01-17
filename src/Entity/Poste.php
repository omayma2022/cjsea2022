<?php

namespace App\Entity;

use App\Repository\PosteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PosteRepository::class)]
class Poste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $titre_poste;

    #[ORM\Column(type: 'string', length: 255)]
    private $description_poste;

    #[ORM\Column(type: 'string', length: 255)]
    private $date_poste;

    #[ORM\Column(type: 'string', length: 255)]
    private $type_poste;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrePoste(): ?string
    {
        return $this->titre_poste;
    }

    public function setTitrePoste(string $titre_poste): self
    {
        $this->titre_poste = $titre_poste;

        return $this;
    }

    public function getDescriptionPoste(): ?string
    {
        return $this->description_poste;
    }

    public function setDescriptionPoste(string $description_poste): self
    {
        $this->description_poste = $description_poste;

        return $this;
    }

    public function getDatePoste(): ?string
    {
        return $this->date_poste;
    }

    public function setDatePoste(string $date_poste): self
    {
        $this->date_poste = $date_poste;

        return $this;
    }

    public function getTypePoste(): ?string
    {
        return $this->type_poste;
    }

    public function setTypePoste(string $type_poste): self
    {
        $this->type_poste = $type_poste;

        return $this;
    }
}
