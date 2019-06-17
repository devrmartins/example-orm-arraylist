<?php

declare(strict_types=1);

namespace App\Performance;

class Pontuacao
{
    private $ano;
    private $pontos = [];

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
        $this->pontos[] = $ponto;
    }

    public function getPontos() : array
    {
        return $this->pontos;
    }
}