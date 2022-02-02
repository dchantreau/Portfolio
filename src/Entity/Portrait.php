<?php

namespace App\Entity;

use App\Repository\PortraitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PortraitRepository::class)]
class Portrait
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $photo1;

    #[ORM\Column(type: 'string', length: 255)]
    private $photo2;

    #[ORM\Column(type: 'string', length: 255)]
    private $texte1;

    #[ORM\Column(type: 'string', length: 255)]
    private $texte2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhoto1(): ?string
    {
        return $this->photo1;
    }

    public function setPhoto1(string $photo1): self
    {
        $this->photo1 = $photo1;

        return $this;
    }

    public function getPhoto2(): ?string
    {
        return $this->photo2;
    }

    public function setPhoto2(string $photo2): self
    {
        $this->photo2 = $photo2;

        return $this;
    }

    public function getTexte1(): ?string
    {
        return $this->texte1;
    }

    public function setTexte1(string $texte1): self
    {
        $this->texte1 = $texte1;

        return $this;
    }

    public function getTexte2(): ?string
    {
        return $this->texte2;
    }

    public function setTexte2(string $texte2): self
    {
        $this->texte2 = $texte2;

        return $this;
    }
}
