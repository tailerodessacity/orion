<?php

namespace App\Http\Integrations\Requests;

use App\Http\Connectors\OrianConnector;
use App\Http\Integrations\Orian\DataObjects\CompanyDTO;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

class OrianRepositoryCompanyRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected ?string $connector = OrianConnector::class;

    protected Method $method = Method::POST;

    public function __construct(readonly protected CompanyDTO $companyDto)
    {
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    public function resolveEndpoint(): string
    {
        return "/Help/Api/POST-company";
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        $data = $response->json();

        return new CompanyDTO(
            consignee: $data['consignee'],
            companyType: $data['companyType'],
            company: $data['company'],
            companyName: $data['companyName'],
            companyGroup: $data['companyGroup'],
            otherCompany: $data['otherCompany'],
            status: $data['status'],
            deliveryComments: $data['deliveryComments'],
            defaultContact: $data['defaultContact'],
        );
    }
}
