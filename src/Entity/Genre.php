<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Entity\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
#[Vich\Uploadable]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $couleur = null;

    #[Vich\UploadableField(mapping: 'post_thumbnail', fileNameProperty: 'imageName', size: 'imageSize')]
    private ?File $imageFile = null;

    #[ORM\OneToMany(mappedBy: 'genre', targetEntity: jeu::class)]
    private Collection $jeu;

    public function __construct()
    {
        $this->jeu = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): static
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getJeu(): Collection
    {
        return $this->jeu;
    }

    public function addJeu(jeu $jeu): static
    {
        if (!$this->jeu->contains($jeu)) {
            $this->jeu->add($jeu);
            $jeu->setGenre($this);
        }

        return $this;
    }

    public function removeJeu(jeu $jeu): static
    {
        if ($this->jeu->removeElement($jeu)) {
            if ($jeu->getGenre() === $this) {
                $jeu->setGenre(null);
            }
        }

        return $this;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

 
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;

        return $this;
    }
}
