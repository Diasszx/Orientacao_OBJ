<?php

declare(strict_types=1);

namespace app;

class PaymentService
{
    public function __construct(
        public readonly string $token,
        public readonly string $baseUrl,
    ){ }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }
}