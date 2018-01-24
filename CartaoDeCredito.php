<?php
require 'Cliente.php';

class CartaoDeCredito{
  public $numero;
  public $dataDeValidade;
  public $cliente;
}

$cartao = new CartaoDeCredito();
$cartao->numero = "123";
$cartao->dataDeValidade = "25/05/2020";
$cartao->cliente = $cli;

echo "Cliente: {$cartao->cliente->nome} Cartao: $cartao->numero Validade: $cartao->dataDeValidade \n";
