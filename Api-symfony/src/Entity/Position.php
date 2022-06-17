<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PositionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=PositionRepository::class)
 */
class Position
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $niveau;
    /**
     * @ORM\ManyToMany(targetEntity=Team::class, inversedBy="positions")
     */
    private $users;
    


    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @return Collection<int, Team>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Team $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(Team $user): self
    {
        $this->users->removeElement($user);

        return $this;
    }

    public function setLevel(string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function setNiveau($niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }
}