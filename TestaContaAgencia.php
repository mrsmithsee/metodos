<?php
require 'Agencia.php';
require 'Conta.php';

$ag8 = new Agencia();
$ag8->unidade = 8;
$ag8->nome = "Aracatuba";

$ag2 = new Agencia();
$ag2->unidade = 2;
$ag2->nome = "Santos";

$ct1 = new Conta();
$ct1->numero = 111111;
$ct1->saldo = 2300;
$ct1->limite = 5000;
$ct1->agencia = $ag8;

echo "Agencia: {$ct1->agencia->unidade} - {$ct1->agencia->nome} Conta: $ct1->numero Saldo: $ct1->saldo Limite: $ct1->limite \n";
