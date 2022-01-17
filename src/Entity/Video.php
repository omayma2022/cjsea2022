<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VideoRepository::class)]
class Video
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Durée;

    #[ORM\Column(type: 'string', length: 255)]
    private $titre_video;

    #[ORM\Column(type: 'string', length: 255)]
    private $date_video;

    #[ORM\Column(type: 'string', length: 255)]
    private $url_video;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDurée(): ?string
    {
        return $this->Durée;
    }

    public function setDurée(string $Durée): self
    {
        $this->Durée = $Durée;

        return $this;
    }

    public function getTitreVideo(): ?string
    {
        return $this->titre_video;
    }

    public function setTitreVideo(string $titre_video): self
    {
        $this->titre_video = $titre_video;

        return $this;
    }

    public function getDateVideo(): ?string
    {
        return $this->date_video;
    }

    public function setDateVideo(string $date_video): self
    {
        $this->date_video = $date_video;

        return $this;
    }

    public function getUrlVideo(): ?string
    {
        return $this->url_video;
    }

    public function setUrlVideo(string $url_video): self
    {
        $this->url_video = $url_video;

        return $this;
    }
}
