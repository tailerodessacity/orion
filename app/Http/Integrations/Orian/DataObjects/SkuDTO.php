<?php

namespace App\Http\Integrations\Orian\DataObjects;

use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Traits\Responses\HasResponse;

class SkuDTO implements WithResponse
{
    use HasResponse;
    public function __construct(

    ) {}

    public static function fromSaloon(array $data): static
    {


    }

    public function toArray(): array
    {
        return [


        ];
    }
}
