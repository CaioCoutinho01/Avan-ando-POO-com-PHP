<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Cpf;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor('Alec Soares', new Cpf('124.456.852-15'), 10000);

    $autenticador->tentaLogin($umDiretor, '1234');