<?php

require_once __DIR__ . '/vendor/autoload.php';

use app\PessoaFisica;

//dump(PessoaFisica::OBJECT_TYPE);
$pessoa  = new PessoaFisica(
    "Adam dias",
    "adam@gmail.com",
    "83921345",
    "1230345345",
    18
);

dump($pessoa->getInformation());
