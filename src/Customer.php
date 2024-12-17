<?php

declare(strict_types=1);

namespace app;

class Customer{
    
    public string $name;
    public Email $email; // validacao(objeto de valor => ValueObject)
    
    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return (string) $this->email;
    }
}