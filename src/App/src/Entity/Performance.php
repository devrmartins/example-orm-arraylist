<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="performances")
 */
class Performance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\OneToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;

    /**
     * @ORM\OneToMany(targetEntity="Pontuacao", mappedBy="performance")
     */
    private $pontuacoes;

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

    public function __construct() 
    {
        
        $this->pontuacoes = new ArrayCollection();
        $this->deleted = false;

        if (! $this->getId()) {
            $this->created = new DateTime('now');
        }
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setUsuario(Usuario $usuario) : void
    {
        $this->usuario = $usuario;
    }

    public function getUsuario() : Usuario
    {
        return $this->usuario;
    }

    public function setPontuacao(Pontuacao $pontuacao) : void
    {
        $this->pontuacoes->add($pontuacao);
    }

    public function getPontuacao() : ArrayCollection
    {
        $this->pontuacoes;
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