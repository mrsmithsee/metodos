<?php

class Conta{
  public $numero;
  public $saldo = 1000;
  public $limite = 100;
  public $agencia;

  function deposita(float $valor){
    $this->saldo += $valor;
  }

  function saca(float $valor){
    $this->saldo -= $valor;
  }

  function consultaSaldo(){
    return $this->saldo;
  }

  function imprimeExtrato($num){
    return $this->saldo . " " . $this->saldo;
  }

}
