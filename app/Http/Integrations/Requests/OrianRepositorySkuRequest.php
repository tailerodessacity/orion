<?php

namespace App\Http\Integrations\Requests;

use App\Http\Connectors\OrianConnector;
use App\Http\Integrations\Orian\DataObjects\CompanyDTO;
use App\Http\Integrations\Orian\DataObjects\SkuDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

class OrianRepositorySkuRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected ?string $connector = OrianConnector::class;

    protected Method $method = Method::POST;

    public function __construct(readonly protected SkuDTO $skuDTO)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/Help/Api/POST-sku";
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        $data = $response->json();

        return new SkuDTO(

        );
    }
}
