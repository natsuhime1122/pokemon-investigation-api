<?php

namespace App\Models\PokeApiResponse\Pokemon\Abilities;

use App\Models\PokeApiResponse\Utility\CommonModels\NamedAPIResource;

class AbilityFlavorText
{
    public function __construct(
        protected readonly string $flavor_text,
        protected readonly NamedAPIResource $language,
        protected readonly NamedAPIResource $version_group,
    )
    {
    }
}
