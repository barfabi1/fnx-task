<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="float")
     */
    private $wallet;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Article")
     */
    private $purchased;

    public function __construct()
    {
        $this->purchased = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    public function getRoles() {
      return [
        'ROLE_USER'
      ];
    }
    public function getSalt() {}

    public function eraseCredentials() {}

    public function serialize() {
      return serialize([
        $this->id,
        $this->username,
        $this->email,
        $this->password
      ]);
    }
    public function unserialize($string) {
        list(
          $this->id,
          $this->username,
          $this->email,
          $this->password
        ) = unserialize($string, ['allowed_classes' => false]);
    }

    public function getWallet(): ?float
    {
        return $this->wallet;
    }

    public function setWallet(float $wallet): self
    {
        $this->wallet = $wallet;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getPurchased(): Collection
    {
        return $this->purchased;
    }

    public function addPurchased(Article $purchased): self
    {
        if (!$this->purchased->contains($purchased)) {
            $this->purchased[] = $purchased;
        }

        return $this;
    }

    public function removePurchased(Article $purchased): self
    {
        if ($this->purchased->contains($purchased)) {
            $this->purchased->removeElement($purchased);
        }

        return $this;
    }
}
