<?php

namespace App\Entity;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\TracksRepository;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity(repositoryClass: TracksRepository::class)]
class Tracks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Track_ID = null;

    #[ORM\Column]
    private ?float $Track_Distance = null;

    #[ORM\Column(length: 255)]
    private ?string $Track_Image = null;

    #[ORM\Column(length: 255)]
    private ?string $Track_Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Track_Surface = null;

    /**
     * @ORM\OneToMany(targetEntity=POIS::class, mappedBy="track")
     */

    private Collection $pois;
    public function __construct()
    {
        $this->pois = new ArrayCollection();
    }
    /**
     *   @return Collection|POIS[]
     */
  

    public function getPOIS(): Collection
    {
        return $this->pois;
    }

    public function addPOI(POIS $poi): self
    {
        if (!$this->pois->contains($poi)) {
            $this->pois[] = $poi;
            $poi->setTrack($this);
        }

        return $this;
    }

    public function removePOI(POIS $poi): self
    {
        if ($this->pois->removeElement($poi)) {
            // set the owning side to null (unless already changed)
            if ($poi->getTrack() === $this) {
                $poi->setTrack(null);
            }
        }

        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTrackID(): ?int
    {
        return $this->Track_ID;
    }

    public function setTrackID(int $Track_ID): static
    {
        $this->Track_ID = $Track_ID;

        return $this;
    }

    public function getTrackDistance(): ?float
    {
        return $this->Track_Distance;
    }

    public function setTrackDistance(float $Track_Distance): static
    {
        $this->Track_Distance = $Track_Distance;

        return $this;
    }

    public function getTrackImage(): ?string
    {
        return $this->Track_Image;
    }

    public function setTrackImage(string $Track_Image): static
    {
        $this->Track_Image = $Track_Image;

        return $this;
    }

    public function getTrackName(): ?string
    {
        return $this->Track_Name;
    }

    public function setTrackName(string $Track_Name): static
    {
        $this->Track_Name = $Track_Name;

        return $this;
    }

    public function getTrackSurface(): ?string
    {
        return $this->Track_Surface;
    }

    public function setTrackSurface(string $Track_Surface): static
    {
        $this->Track_Surface = $Track_Surface;

        return $this;
    }
}