<?php

namespace App\Http\Integrations\Orian\DataObjects;

use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Traits\Responses\HasResponse;

class CompanyDTO implements WithResponse
{
    use HasResponse;
    public function __construct(
        public string $consignee,
        public string $companyType,
        public string $company,
        public string $companyName,
        public string $companyGroup,
        public string $otherCompany,
        public int $status,
        public string $deliveryComments,
        public string $defaultContact,
        public array $contacts
    ) {}

    public static function fromSaloon(array $data): static
    {


    }

    public function toArray(): array
    {
        return [
            'consignee' => $this->consignee,
            'companyType' => $this->companyType,
            'company' => $this->company,
            'companyName' => $this->companyName,
            'companyGroup' => $this->companyGroup,
            'otherCompany' => $this->otherCompany,
            'status' => $this->status,
            'deliveryComments' => $this->deliveryComments,
            'defaultContact' => $this->defaultContact,
            'contacts' => $this->contacts,
        ];
    }
}
