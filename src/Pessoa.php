<?php

declare(strict_types=1);

namespace app;

class Pessoa
{
    public function __construct(
        protected string $name,
        protected string $document,
    ){ }

    public function showName()
    {
        return $this->name;
    }
}

