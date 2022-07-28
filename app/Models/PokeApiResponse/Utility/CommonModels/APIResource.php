<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class APIResource
{
    public function __construct(
        protected readonly string $url,
    )
    {
    }
}
