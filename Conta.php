<?php

class Conta{
  public $numero;
  public $saldo = 0;

  function deposita(float $valor){
    $this->saldo += $valor;
  }
}
