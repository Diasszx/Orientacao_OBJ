<?php

require_once __DIR__ . '/vendor/autoload.php';

use app\PessoaFisica;
use app\PessoaJuridica;

//dump(PessoaFisica::OBJECT_TYPE);
$adam  = new PessoaFisica();
$adam->name = "adam dias";
$adam->age = 21;
$adam->gender = "M";
$adam->cpf = "12332434534";

dump($adam);

$adamJuridico = new PessoaJuridica;
$adamJuridico->name = "Alimento e comida";
$adamJuridico->cnpj = "123435332";

dump($adamJuridico);

function getName(Pessoa $class): void
{
    $class->showName();
}
getName($adam);