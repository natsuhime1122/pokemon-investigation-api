<?php

namespace App\Models\PokeApiResponse\Games;

use App\Models\PokeApiResponse\Utility\CommonModels\NamedAPIResource;

class VersionGroup
{
    /**
     * APIレスポンス
     * https://pokeapi.co/api/v2/version-group/{id or name}/
     *
     * @param int $id
     * @param string $name
     * @param int $order
     * @param NamedAPIResource $generation
     * @param array<NamedAPIResource> $move_learn_methods
     * @param array<NamedAPIResource> $pokedexes
     * @param array<NamedAPIResource> $regions
     * @param array<NamedAPIResource> $versions
     */
    public function __construct(
        protected readonly int $id,
        protected readonly string $name,
        protected readonly int $order,
        protected readonly NamedAPIResource $generation,
        protected readonly array $move_learn_methods,
        protected readonly array $pokedexes,
        protected readonly array $regions,
        protected readonly array $versions,
    )
    {
    }
}
