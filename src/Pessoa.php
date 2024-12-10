<?php

namespace app;

abstract class Pessoa
{
    public string $name;

    public function showName(): void
    {
        echo $this->name . PHP_EOL;
    }
    
    abstract public function getDocument(): string;
}

