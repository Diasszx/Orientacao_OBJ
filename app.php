<?php

require_once __DIR__ . '/vendor/autoload.php';

use app\PessoaFisica;
use app\PessoaJuridica;

//dump(PessoaFisica::OBJECT_TYPE);
$adam  = new PessoaFisica();
$adam->name = "adam dias";
$adam->age = 21;
$adam->gender = "M";

dump($adam);

$adamJuridico = new PessoaJuridica;
$adamJuridico->name = "Alimento e comida";
$adamJuridico->age = 31;

dump($adamJuridico);