<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="pontos")
 */
class Ponto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Pontuacao", inversedBy="pontos")
     * @ORM\JoinColumn(name="pontuacao_id", referencedColumnName="id")
     */
    private $pontuacao;
    
    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $codigo;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $nome;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $inicio;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $fim;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $valor;

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

    public function setCodigo(string $codigo) : void
    {
        $this->codigo = $codigo;
    }

    public function getCodigo() : string
    {
        return $this->codigo;
    }

    public function setNome(string $nome) : void
    {
        $this->nome = $nome;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setAno(string $ano) : void
    {
        $this->ano = $ano;
    }

    public function getAno() : ?string
    {
        return $this->ano;
    }

    public function setValor(float $valor) : void
    {
        $this->valor = $valor;
    }

    public function getValor() : float
    {
        return $this->valor;
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