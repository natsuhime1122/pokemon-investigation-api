<?php

namespace App\UseCases\PokeApi;

use App\Models\PokeApiResponse\Utility\CommonModels\NamedAPIResource;
use App\Models\PokeApiResponse\Games\Version;
use App\Services\PokemonApiService;

class GetVersionAction
{
    public function __construct(protected PokemonApiService $service)
    {
    }

    public function __invoke(): Version
    {
        $response = $this->service->version(1);
        $data = json_decode($response, true);
        $versionGroup = new NamedAPIResource(name: $data['version_group']['name'], url: $data['version_group']['url']);
        return new Version(
            id: $data['id'],
            name: $data['name'],
            names: $data['names'],
            version_group: $versionGroup
        );
    }
}
