<?php

declare(strict_types=1);

namespace app;

$service = new PaymentService(
    token: 'askda132sxc',
    baseUrl: 'https://gateway.com.br',
)

dump($service->getToken(), $service->getBaseUrl());

