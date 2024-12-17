<?php

declare(strict_types=1);

namespace app;

class PersonDTO
{
    public function __construct(
        private array $properties,
        private string $name = '',
        private string $document = '',
        private string $gender = '',
    )
    {
        $this->name = $this->properties['name'];
        $this->name = $this->properties['document'];
        $this->name = $this->properties['gender'];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDocument(): string
    {
        return $this->document;
    }

    public function getGender(): string
    {
        return $this->gender;
    }
}