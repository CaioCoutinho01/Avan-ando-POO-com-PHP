<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco('Indaiatuba', 'V Scisci', 'JK', '123');
$primeiraConta = new Conta(new Titular('Caio Coutinho', new Cpf('123.456.789-10'), $endereco));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular('Rebeca Fransin', new Cpf('987.654.321-10'), $endereco));


echo "total de Contas: " . Conta::recuperaNumerodeContas() . PHP_EOL;
