<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact
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
    private $FirstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $LastName;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $Photo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Favourite;

    /**
     * @ORM\OneToMany(targetEntity=ContactPhone::class, mappedBy="Contact", cascade={"persist"})
     */
    private $contactPhones;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $PhotoUrl;

    public function __construct()
    {
        $this->contactPhones = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): self
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(?string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getPhoto()
    {
        return $this->Photo;
    }

    public function setPhoto($Photo): self
    {
        $this->Photo = $Photo;

        return $this;
    }

    public function getFavourite(): ?bool
    {
        return $this->Favourite;
    }

    public function setFavourite(?bool $Favourite): self
    {
        $this->Favourite = $Favourite;

        return $this;
    }

    /**
     * @return Collection|ContactPhone[]
     */
    public function getContactPhones(): Collection
    {
        return $this->contactPhones;
    }

    public function addContactPhone(ContactPhone $contactPhone): self
    {
        if (!$this->contactPhones->contains($contactPhone)) {
            $this->contactPhones[] = $contactPhone;
            $contactPhone->setContact($this);
        }

        return $this;
    }

    public function removeContactPhone(ContactPhone $contactPhone): self
    {
        if ($this->contactPhones->removeElement($contactPhone)) {
            // set the owning side to null (unless already changed)
            if ($contactPhone->getContact() === $this) {
                $contactPhone->setContact(null);
            }
        }

        return $this;
    }

    public function getPhotoUrl(): ?string
    {
        return $this->PhotoUrl;
    }

    public function setPhotoUrl(?string $PhotoUrl): self
    {
        $this->PhotoUrl = $PhotoUrl;

        return $this;
    }
}
