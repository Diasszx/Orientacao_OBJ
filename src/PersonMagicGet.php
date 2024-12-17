<?php

class PersonMagicGet{

    protected array $properties = [];

    public function __get(string $key): mixed
    {
        if(array_key_exists($key, $this->properties)){
            return $this->properties[$key];
        }
    }

    public function __set(string $key, mixed $value): void
    {
        $this->properties[$key] = $value;
    }
}

$adam = new PersonMagicGet;
$adam->name = "adam dias";
$adam->date = date('d/m/Y');

dump($adam->name);