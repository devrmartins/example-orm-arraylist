<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="pontuacoes")
 */
class Pontuacao
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Performance", inversedBy="pontuacoes")
     * @ORM\JoinColumn(name="performance_id", referencedColumnName="id")
     */
    private $performance;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $ano;

    /**
     * @ORM\OneToMany(targetEntity="Ponto", mappedBy="pontuacao")
     */
    private $pontos;

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
        
        $this->pontos = new ArrayCollection();
        $this->deleted = false;

        if (! $this->getId()) {
            $this->created = new DateTime('now');
        }
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setAno(string $ano) : void
    {
        $this->ano = $ano;
    }

    public function getAno() : string
    {
        return $this->ano;
    }

    public function setPonto(Ponto $ponto) : void
    {
        $this->pontos->add($ponto);
    }

    public function getPonto() : ArrayCollection
    {
        $this->pontos;
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