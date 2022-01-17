<?php

namespace AlexJustesen\OpenbrewerydbApi\Connectors;

use Sammyjo20\Saloon\Http\SaloonConnector;

class ObdbConnector extends SaloonConnector
{
    /**
     * Define the base url for the connector.
     *
     * @return string
     */
    public function defineBaseUrl(): string
    {
        return 'https://api.openbrewerydb.org';
    }

    /**
     * Define the default Guzzle configuration for the connector.
     *
     * @return string[]
     */
    public function defaultConfig(): array
    {
        // You can specify any of the Guzzle configuration options here.
        // See https://docs.guzzlephp.org/en/stable/request-options.html for more.

        return [
            'timeout' => 5,
        ];
    }
}
