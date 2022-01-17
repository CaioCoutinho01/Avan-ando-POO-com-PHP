<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct($nome, Cpf $cpf, $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }


    public function alteraNome($nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0 ){
            echo "Valor deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

    public function recuperasalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;

}