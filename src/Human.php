<?php

declare(strict_types=1);

namespace app;

class Human
{
    public function __construct(
        public string $gender,
    )
    { }

    public function __destruct()
    {
        echo "Chamou o destrutor do pai" . PHP_EOL;
    }
}