<?php

use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor(
    'Caio Coutinho',
    new Cpf('123.456.789-10'),
    3000);

$umaFuncionaria = new Gerente(
    'Rebeca Fransin',
    new Cpf('789.456.123-10'),
    5000);

$umEditor = new EditorVideo('alessandro', new Cpf('148.795.786-13'), 2500);

$umFuncionario->sobeDeNivel();

$umDiretor = new Diretor('Maria', new Cpf('125.451.524-15'), 10000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);


echo $controlador->recuperaTotal();