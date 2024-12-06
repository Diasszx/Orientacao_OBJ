<?php

declare(strict_types=1);

namespace app;

class PessoaFisica
{
    const OBJECT_TYPE = "Humano";
    private static string $name = " ";
    private string $email;
    private string $phone;
    private string $cpf;
    private int $age;

    public function __construct(
        string $name,
        string $email,
        string $phone,
        string $cpf,
        int $age,
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->cpf = $cpf;
        $this->age = $age;
    }

    public static function getInformation($name): string
    {
        self::$name = $name;
        return self::$name . " - " . self::OBJECT_TYPE;
    }
}
