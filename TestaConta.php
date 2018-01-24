<?php
declare(strict_types = 1);

require 'Conta.php';
$conta = new Conta();
echo"Saldo inicial da conta: $conta->saldo" . PHP_EOL;
$conta->deposita(2000);

echo"Saldo final da conta: $conta->saldo" . PHP_EOL;
