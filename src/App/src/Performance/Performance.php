<?php

declare(strict_types=1);

namespace App\Performance;

class Performance
{
    private $usuario;
    private $pontuacoes = [];

    public function setUsuario(Usuario $usuario) : void
    {
        $this->usuario = $usuario;
    }

    public function getUsuario($usuario) : Usuario
    {
        return $this->usuario;
    }

    public function setPontuacao(Pontuacao $pontuacao) : void
    {
        $this->pontuacoes[] = $pontuacao;
    }

    public function getPontuacoes() : array
    {
        return $this->pontuacoes;
    }
}