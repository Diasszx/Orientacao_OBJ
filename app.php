<?php

declare(strict_types=1);

use app\Email;
use app\NaturalPerson;
use app\PessoaFisica;
use app\PessoaJuridica;

require_once __DIR__ . '/vendor/autoload.php';

/*$adam = new NaturalPerson("Adam","120342435");
$adam->gender = 'male';

dump($adam->showName(), $adam->getGender(), $adam->getMensagem());
*/

try{
    $adam = new Customer;
    $adam->name = "Adam Dias";
    $adam->email = new Email("adam@gmail.com");

    echo "O email {$adam->getEmail()} pertence ao {$adam->name}." . PHP_EOL;
} catch(Exception $e){
    echo "OPS! Falha ao criar novo cliente" . PHP_EOL;
}


