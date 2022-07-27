<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class Description
{
    public function __construct(
        protected readonly string $description,
        protected readonly NamedAPIResource $language,
    )
    {
    }
}
