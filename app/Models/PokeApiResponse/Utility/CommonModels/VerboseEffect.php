<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class VerboseEffect
{
    public function __construct(
        protected readonly string $effect,
        protected readonly string $short_effect,
        protected readonly NamedAPIResource $language,
    )
    {
    }
}
