<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property string $cidade
 * @property string $bairro
 * @property string $rua
 * @property string $numero
 */

final class Endereco
{
    use AcessoPropriedades;
    private string $cidade;
    private string $rua;
    private string $bairro;
    private string $numero;

    public function __construct($cidade, $rua, $bairro, $numero)
    {
        $this->cidade = $cidade;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}" . PHP_EOL;
    }

    public function __get(string $nomeAtributo)
    {
        $metodo = 'get'. ucfirst($nomeAtributo);
        return $this->$metodo();
    }
    public function __set(string $nomeAtributo, $valor): void
    {
        $metodo = 'set' . ucfirst($nomeAtributo);
        $this->$metodo($valor);
    }

    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function setRua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function setBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

}