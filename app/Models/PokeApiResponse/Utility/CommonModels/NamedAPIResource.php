<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class NamedAPIResource
{
    public function __construct(
        protected readonly string $name = '',
        protected readonly string $url = '',
    )
    {
    }
}
