<?php
require 'Aluno.php';
require 'Turma.php';


$tur = new Turma();
$tur->periodo = "Manha";
$tur->serie = 6;
$tur->sigla = "A";
$tur->tipoDeEnsino = "Medio";

$al1 = new Aluno();
$al1->nome = "Rafina";
$al1->dataNascimento = "01/05/2000";
$al1->rg = "55555555-5";
$al1->turma = $tur;

echo "Aluno: $al1->nome RG: $al1->rg Turma: Serie: {$al1->turma->serie} - {$al1->turma->sigla} \n";
