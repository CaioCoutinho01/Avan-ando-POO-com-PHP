<?php

namespace Alura\Banco\Modelo;

 abstract class Pessoa
{
    use AcessoPropriedades;
    protected string $nome;
    protected Cpf $cpf;

    public function __construct($nome, $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }


    final protected function validaNomeTitular(string $nome)
    {
        if (strlen($nome < 5)){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }




}