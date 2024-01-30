<?php

namespace App\Services;

use App\Http\Integrations\Requests\OrianRepositoryCompanyRequest;
use Saloon\Http\Connector;

class ApiSenderService
{
    public function sendRequestToApi(Connector $connector)
    {
        $connector->pool([
            new OrianRepositoryCompanyRequest(),
        ]);
    }
}
