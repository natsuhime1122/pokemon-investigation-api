<?php

namespace App\Models\PokeApiResponse\Pokemon\Abilities;

use App\Models\PokeApiResponse\Utility\CommonModels\Effect;
use App\Models\PokeApiResponse\Utility\CommonModels\NamedAPIResource;

class AbilityEffectChange
{
    /**
     * @param array<Effect> $effect_entries
     * @param NamedAPIResource $version_group
     */
    public function __construct(
        protected readonly array $effect_entries,
        protected readonly NamedAPIResource $version_group,
    )
    {
    }
}
