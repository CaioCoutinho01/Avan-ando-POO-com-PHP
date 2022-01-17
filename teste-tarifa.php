<?php

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca,Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};


require_once 'autoload.php';

$conta = new ContaCorrente(new Titular('Juscelino', new Cpf('123.457.842-11'), new Endereco(
    'Juanopolis', 'quero-qeuro','ala','123'
)));

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperasaldo();