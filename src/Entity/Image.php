<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $date_image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateImage(): ?string
    {
        return $this->date_image;
    }

    public function setDateImage(string $date_image): self
    {
        $this->date_image = $date_image;

        return $this;
    }
}
