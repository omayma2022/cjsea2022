<?php

namespace App\Entity;

use App\Repository\CarouselRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarouselRepository::class)]
class Carousel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $date_carousel;

    #[ORM\Column(type: 'string', length: 255)]
    private $titre_carousel;

    #[ORM\Column(type: 'string', length: 255)]
    private $description_carousel;

    #[ORM\Column(type: 'string', length: 255)]
    private $URL_carousel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCarousel(): ?string
    {
        return $this->date_carousel;
    }

    public function setDateCarousel(string $date_carousel): self
    {
        $this->date_carousel = $date_carousel;

        return $this;
    }

    public function getTitreCarousel(): ?string
    {
        return $this->titre_carousel;
    }

    public function setTitreCarousel(string $titre_carousel): self
    {
        $this->titre_carousel = $titre_carousel;

        return $this;
    }

    public function getDescriptionCarousel(): ?string
    {
        return $this->description_carousel;
    }

    public function setDescriptionCarousel(string $description_carousel): self
    {
        $this->description_carousel = $description_carousel;

        return $this;
    }

    public function getURLCarousel(): ?string
    {
        return $this->URL_carousel;
    }

    public function setURLCarousel(string $URL_carousel): self
    {
        $this->URL_carousel = $URL_carousel;

        return $this;
    }
}
