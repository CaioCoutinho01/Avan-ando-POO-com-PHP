<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Indaiatuba', 'Vila Maria', 'JK', '75');
$outroEndereco = new Endereco('Salto', 'Vila Ana', 'JJK', '12');


echo $umEndereco;

$umEndereco->cidade = 'Campinas';
$umEndereco->numero = '555';
$umEndereco->rua = 'Kennedy';
$umEndereco->bairro = 'Vila Suiça';

echo $umEndereco;

