<?php

declare(strict_types=1);

namespace app;

class Webcall
{
    protected function process(float $amount, string $description)
    {
        dump('Chamou!', $amount, $description);
    }

    // public function __call( string $method, array $parameters): mixed
    // {
    //     if(method_exists($this, $method)){
    //         call_user_func_array([$this, $method],$parameters);
    //     }

    //     return $this;
    // }

    public static function __callStatic(string $method, array $parameters): mixed
    {
        return(new static)->$method(...$parameters);
    }
}

// $invoice = new Invoice;
// $invoice->process(15.50,'faturamento');

Webcall::process(15.50,'faturamento');