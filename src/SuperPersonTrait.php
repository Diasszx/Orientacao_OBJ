<?php

declare(strict_types=1);

namespace app;

trait SuperPersonTrait
{
    public string $gender = '';

    public function getGender():string
    {
        return $this->gender;
    }
}
