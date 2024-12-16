<?php

declare(strict_types=1);

namespace app;

trait PersonTrait2{
    
    public string $mensagem = "Voce pode declarar quantas traits quiser!";

    public function getMensagem():string
    {
        return $this->mensagem;
    }
}