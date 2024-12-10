<?php

declare(strict_types=1);

namespace app;

class PessoaJuridica extends Pessoa
{
    public string $cnpj;

    public function getDocument(): string
    {
        return $this->cnpj;
    }
}
