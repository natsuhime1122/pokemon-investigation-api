<?php

namespace App\Models\PokeApiResponse\Games;

use App\Models\PokeApiResponse\Utility\CommonModels\NamedAPIResource;

class PokemonEntry
{
    public function __construct(
        protected readonly int $entry_number,
        protected readonly NamedAPIResource $pokemon_species,
    )
    {
    }
}
