<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios")
 */
class Usuario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $username;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $email;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $modified;

    public function __construct() {
        
        $this->deleted = false;

        if (! $this->getId()) {
            $this->created = new DateTime('now');
        }
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setUsername(string $username) : void
    {
        $this->username = $username;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setDeleted(bool $deleted) : void
    {
        $this->deleted = $deleted;
    }

    public function isDeleted() : bool
    {
        return ($this->deleted === false);
    }

    public function setCreated(DateTime $created) : void
    {
        $this->created = $created;
    }

    public function getCreated() : DateTime
    {
        return $this->created;
    }

    public function setModified(DateTime $modified) : void
    {
        $this->modified = $modified;
    }

    public function getModified() : DateTime
    {
        return $this->modified;
    }
}