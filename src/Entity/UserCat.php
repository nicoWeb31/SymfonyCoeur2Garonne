<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserCatRepository")
 */
class UserCat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Users", inversedBy="userCats")
     */
    private $usersCat;

    public function __construct()
    {
        $this->usersCat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Users[]
     */
    public function getUsersCat(): Collection
    {
        return $this->usersCat;
    }

    public function addUsersCat(Users $usersCat): self
    {
        if (!$this->usersCat->contains($usersCat)) {
            $this->usersCat[] = $usersCat;
        }

        return $this;
    }

    public function removeUsersCat(Users $usersCat): self
    {
        if ($this->usersCat->contains($usersCat)) {
            $this->usersCat->removeElement($usersCat);
        }

        return $this;
    }
}
