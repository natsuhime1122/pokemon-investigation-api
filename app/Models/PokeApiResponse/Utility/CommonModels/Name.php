<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class Name
{
    public function __construct(
        protected string $name,
        protected NamedAPIResource $language,
    )
    {
    }
}
