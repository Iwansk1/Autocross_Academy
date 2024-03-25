<?php

namespace App\Entity;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\POISRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: POISRepository::class)]
class POIS
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $POIS_ID = null;

    #[ORM\Column]
    private ?int $Track_ID = null;

    /**
     * @ORM\ManyToOne(targetEntity=Tracks::class, inversedBy="pois")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Tracks $track;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPOISID(): ?int
    {
        return $this->POIS_ID;
    }

    public function setPOISID(int $POIS_ID): self
    {
        $this->POIS_ID = $POIS_ID;

        return $this;
    }

    public function getTrackID(): ?int
    {
        return $this->Track_ID;
    }

    public function setTrackID(int $Track_ID): self
    {
        $this->Track_ID = $Track_ID;

        return $this;
    }

    public function getTrack(): ?Tracks
    {
        return $this->track;
    }

    public function setTrack(?Tracks $track): self
    {
        $this->track = $track;

        return $this;
    }
}
