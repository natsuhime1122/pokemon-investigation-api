<?php

namespace App\Models\PokeApiResponse\Games;

use App\Models\PokeApiResponse\Utility\CommonModels\NamedAPIResource;

class Generation
{
    /**
     * https://pokeapi.co/api/v2/generation/{id or name}/からのレスポンス値
     *
     * @param int $id
     * @param string $name
     * @param array<NamedAPIResource> $abilities
     * @param array<NamedAPIResource> $names
     * @param NamedAPIResource $main_region
     * @param array<NamedAPIResource> $moves
     * @param array<NamedAPIResource> $pokemon_species
     * @param array<NamedAPIResource> $types
     * @param array<NamedAPIResource> $version_groups
     */
    public function __construct(
        protected readonly int $id,
        protected readonly string $name,
        protected readonly array $abilities,
        protected readonly array $names,
        protected readonly NamedAPIResource $main_region,
        protected readonly array $moves,
        protected readonly array $pokemon_species,
        protected readonly array $types,
        protected readonly array $version_groups,
    )
    {
    }
}
