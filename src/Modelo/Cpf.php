<?php

namespace Alura\Banco\Modelo;

final class Cpf
{
    private string $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }





}