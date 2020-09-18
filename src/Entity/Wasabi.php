<?php

namespace App\Entity;

use App\Repository\WasabiRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WasabiRepository::class)
 */
class Wasabi
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="integer")
     */
    private $spiciness;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getSpiciness(): ?int
    {
        return $this->spiciness;
    }

    public function setSpiciness(int $spiciness): self
    {
        $this->spiciness = $spiciness;

        return $this;
    }
}
