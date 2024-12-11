<?php

declare(strict_types=1);

namespace app;

class PessoaFisica extends Pessoa implements PessoaFisicaInterface
{
    public string $age;
    public string $gender;
    public string $cpf;

    public function getCpf(): string
    {
        return $this->cpf;
    }

       public function setCpf(string $cpf):void 
   {
    $this->cpf = $cpf;
   } 

   public function getName(): string
   {
        return $this->name;
   }
}
    // const OBJECT_TYPE = "Humano";
    // private string $name;
    // private string $email;
    // private string $phone;
    // private string $cpf;
    // private int $age;

    // public function __construct(
    //     string $name,
    //     string $email,
    //     string $phone,
    //     string $cpf,
    //     int $age,
    // ) {
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->phone = $phone;
    //     $this->cpf = $cpf;
    //     $this->age = $age;
    // }

    // public function getInformation(): string
    // {
    //     return $this->name . " - " . self::OBJECT_TYPE;
    // }

