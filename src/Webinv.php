<?php

declare(strict_types=1);

namespace app;

class Webinv
{
    public function __invoke(): mixed
    {
        var_dump('Chamou o metodo magico __invoke');

        return $this;
    }
}

$user = new Webinv;
var_dump($user());