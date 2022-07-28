<?php

namespace App\Models\PokeApiResponse\Pokemon\Abilities;

use App\Models\PokeApiResponse\Utility\CommonModels\NamedAPIResource;

class AbilityPokemon
{
    public function __construct(
        protected readonly bool $is_hidden,
        protected readonly int $slot,
        protected readonly NamedAPIResource $pokemon
    )
    {
    }
}
