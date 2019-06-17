<?php

declare(strict_types=1);

namespace App\Performance;

use App\Usuario;

class Performance
{
    private $usuario;
    private $pontuacoes = [];

    public function toArray() : array
    {

        $usuario = serialize($this->usuario);

        return [
            'usuario' => $usuario,
        ];
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
        $this->pontuacoes[] = $pontuacao;
    }

    public function getPontuacoes() : array
    {
        return $this->pontuacoes;
    }
}