<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class Encounter
{
    /**
     * @param int $min_level
     * @param int $max_level
     * @param array<NamedAPIResource> $condition_values
     * @param int $chance
     * @param NamedAPIResource $method
     */
    public function __construct(
        protected readonly int $min_level,
        protected readonly int $max_level,
        protected readonly array $condition_values,
        protected readonly int $chance,
        protected readonly NamedAPIResource $method,
    )
    {
    }
}
