<?php

declare(strict_types=1);

namespace app;

class PessoaEstrangeira extends PessoaFisica
{
   public function setCpf(string $cpf):void 
   {
    $this->cpf = $cpf;
   } 
}