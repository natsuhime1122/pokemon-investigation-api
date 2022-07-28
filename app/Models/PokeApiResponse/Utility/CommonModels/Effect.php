<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class Effect
{
    public function __construct(
        protected readonly string $effect,
        protected readonly NamedAPIResource $language,
    )
    {
    }
}
