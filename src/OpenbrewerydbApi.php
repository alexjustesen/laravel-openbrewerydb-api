<?php

namespace AlexJustesen\OpenbrewerydbApi;

use AlexJustesen\OpenbrewerydbApi\Requests\AutoCompleteBreweriesRequest;
use AlexJustesen\OpenbrewerydbApi\Requests\GetBreweryRequest;
use AlexJustesen\OpenbrewerydbApi\Requests\ListBreweriesRequest;
use AlexJustesen\OpenbrewerydbApi\Requests\SearchBreweriesRequest;

class OpenbrewerydbApi
{
    public static function autoComplete(string $query)
    {
        $request = new AutoCompleteBreweriesRequest($query);

        return $request->send();
    }

    public static function get(string $breweryId)
    {
        $request = new GetBreweryRequest($breweryId);

        return $request->send();
    }

    public static function list(array $params = [], int $page = null, int $perPage = null, string $sort = null)
    {
        $request = new ListBreweriesRequest();

        if ($page) {
            $request->addQuery('page', $page);
        }

        if ($perPage) {
            $request->addQuery('per_page', $perPage);
        }

        if ($sort) {
            $request->addQuery('sort', $sort);
        }

        if (in_array('by_city', $params)) {
            $request->addQuery('by_city', $params['by_city']);
        }

        if (in_array('by_dist', $params)) {
            $request->addQuery('by_dist', $params['by_dist']);
        }

        if (in_array('by_name', $params)) {
            $request->addQuery('by_name', $params['by_name']);
        }

        if (in_array('by_state', $params)) {
            $request->addQuery('by_state', $params['by_state']);
        }

        if (in_array('by_postal', $params)) {
            $request->addQuery('by_postal', $params['by_postal']);
        }

        if (in_array('by_type', $params)) {
            $request->addQuery('by_type', $params['by_type']);
        }

        return $request->send();
    }

    public static function search(string $query)
    {
        $request = new SearchBreweriesRequest($query);

        return $request->send();
    }
}
