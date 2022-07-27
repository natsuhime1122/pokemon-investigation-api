<?php

namespace App\Models\PokeApiResponse\Games;

use App\Models\PokeApiResponse\Utility\CommonModels\Name;
use App\Models\PokeApiResponse\Utility\CommonModels\NamedAPIResource;

class Pokedexes
{
    /**
     * @param int $id
     * @param string $name
     * @param bool $is_main_series
     * @param array<> $descriptions
     * @param array<Name> $names
     * @param array<PokemonEntry> $pokemon_entries
     * @param NamedAPIResource $region
     * @param array<NamedAPIResource> $version_groups
     */
    public function __construct(
        protected readonly int $id,
        protected readonly string $name,
        protected readonly bool $is_main_series,
        protected readonly array $descriptions,
        protected readonly array $names,
        protected readonly array $pokemon_entries,
        protected readonly NamedAPIResource $region,
        protected readonly array $version_groups,
    )
    {
    }
}
