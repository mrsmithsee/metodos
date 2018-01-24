<?php
class Cliente{
  public $nome;
  public $codigo;
}

$cli = new cliente();
$cli->nome = "Rafael 1";
$cli->codigo = 111111;

$cli2 = new Cliente();
$cli2->nome = "Ana 2";
$cli2->codigo = 222222;
