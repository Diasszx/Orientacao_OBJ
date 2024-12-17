<?php

declare(strict_types=1);

namespace app;

use DomainException;

final class Email{ // value object
    public function __construct(
        private string $email,
    ){ 
        $this->validate();
    }

    private function validate(): void
    {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            throw new DomainException("Email inválido!");
        }
    } 

    public function __toString(): string
    {
        return $this->email;
    }
}