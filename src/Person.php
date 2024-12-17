<?php

declare(strict_types=1);

namespace App;

use DomainException;

class Person extends Human
{
    public function __construct(
        public string $name,
        public int $age,
        string $gender,
    ){ 
        parent::__construct($gender);
    }

    public function __destruct()
    {
        parent::__destruct();
        echo "Chamou o destrutor de Person" . PHP_EOL;
    }
}