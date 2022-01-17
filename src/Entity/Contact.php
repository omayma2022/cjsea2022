<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Nom_contact;

    #[ORM\Column(type: 'string', length: 255)]
    private $Tel_contact;

    #[ORM\Column(type: 'string', length: 255)]
    private $sujet_contact;

    #[ORM\Column(type: 'string', length: 255)]
    private $message;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomContact(): ?string
    {
        return $this->Nom_contact;
    }

    public function setNomContact(string $Nom_contact): self
    {
        $this->Nom_contact = $Nom_contact;

        return $this;
    }

    public function getTelContact(): ?string
    {
        return $this->Tel_contact;
    }

    public function setTelContact(string $Tel_contact): self
    {
        $this->Tel_contact = $Tel_contact;

        return $this;
    }

    public function getSujetContact(): ?string
    {
        return $this->sujet_contact;
    }

    public function setSujetContact(string $sujet_contact): self
    {
        $this->sujet_contact = $sujet_contact;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
