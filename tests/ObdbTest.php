<?php

use AlexJustesen\OpenbrewerydbApi\OpenbrewerydbApi;

it('can auto complete for a brewery', function () {
    $request = OpenbrewerydbApi::autoComplete('broad');

    expect($request->ok())->toBeTrue();
});

it('can get a brewery', function () {
    $request = OpenbrewerydbApi::get('broad-brook-brewing-company-suffield');

    expect($request->ok())->toBeTrue();
});

it('can list breweries', function () {
    $request = OpenbrewerydbApi::list();

    expect($request->ok())->toBeTrue();
});

it('can search for a brewery ', function () {
    $request = OpenbrewerydbApi::search('broad');

    expect($request->ok())->toBeTrue();
});
