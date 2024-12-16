<?php

declare(strict_types=1);

use app\NaturalPerson;
use app\PessoaFisica;
use app\PessoaJuridica;

require_once __DIR__ . '/vendor/autoload.php';

$adam = new NaturalPerson("Adam","120342435");
$adam->gender = 'male';

dump($adam->showName(), $adam->getGender(), $adam->getMensagem());