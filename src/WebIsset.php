<?php

declare(strict_types=1);

namespace app;

class WebIsset{
    protected array $properties = [];

    public function __get(string $key):mixed
    {
        if (array_key_exists($key, $this->properties)){
            return $this->properties[$key];
        }
        return null;
    }

    public function __set(string $key,mixed $value): void
    {
        $this->properties[$key] = $value;
    }

    public function __isset(string $key): bool
    {
        return array_key_exists($key,$this->properties);
    }

    public function __unset(string $name):void
    {
        unset($this->properties[$key]);
    }
}