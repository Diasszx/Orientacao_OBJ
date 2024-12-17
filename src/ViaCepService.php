<?php

declare(strict_types=1);

namespace app;

class ViaCepService
{

    public static function handle(string $zipcode)
    {
        return Http::get("https://viacep.com.br/ws/{$this->zipcode}/json/")->json();
    }
}

