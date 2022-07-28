<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class FlavorText
{
    public function __construct(
        protected readonly string $flavor_text,
        protected readonly NamedAPIResource $language,
        protected readonly NamedAPIResource $version,
    )
    {
    }
}
