<?php

namespace AlexJustesen\OpenbrewerydbApi\Requests;

use AlexJustesen\OpenbrewerydbApi\Connectors\ObdbConnector;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;
use Sammyjo20\Saloon\Traits\Features\AcceptsJson;

class GetBreweryRequest extends SaloonRequest
{
    use AcceptsJson;

    /**
     * Define the method that the request will use.
     *
     * @var string|null
     */
    protected ?string $method = Saloon::GET;

    /**
     * The connector.
     *
     * @var string|null
     */
    protected ?string $connector = ObdbConnector::class;

    /**
     * Define the endpoint for the request.
     *
     * @return string
     */
    public function defineEndpoint(): string
    {
        return '/breweries/' . $this->breweryId;
    }

    /**
     * Constructor, you can pass in your own properties.
     *
     */
    public function __construct(
        public string $breweryId
    ) {
    }
}
