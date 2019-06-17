<?php

declare(strict_types=1);

namespace App\Performance;

class Ponto
{
    private $codigo;
    private $nome;
    private $ano;
    private $valor;

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

    public function getAno() : string
    {
        return $this->ano;
    }

    public function setValor(decimal $valor) : void
    {
        $this->valor = $valor;
    }

    public function getValor() : decimal
    {
        return $this->valor;
    }
}