<?php

declare(strict_types=1);

namespace app;

interface PessoaJuridicaInterface
{
    public function getCnpj(): string;
}