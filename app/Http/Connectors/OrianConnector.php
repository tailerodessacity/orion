<?php

namespace App\Http\Connectors;

use Saloon\Http\Auth\QueryAuthenticator;
use Saloon\Http\Connector;

class OrianConnector extends Connector
{
    public ?int $tries = 3;

    public ?int $retryInterval = 1000;

    public function __construct(public readonly string $token) {}

    protected function defaultAuth(): QueryAuthenticator
    {
        return new QueryAuthenticator('api-key', $this->token);
    }

    public function resolveBaseUrl(): string
    {
        return (string) config('services.orian-api.url');
    }

    public function defaultConfig(): array
    {
        return [
            'timeout' => 30,
        ];
    }
}
