<?php

declare(strict_types=1);

namespace app;

interface PessoaFisicaInterface
{
    public function getCpf(): string;
}