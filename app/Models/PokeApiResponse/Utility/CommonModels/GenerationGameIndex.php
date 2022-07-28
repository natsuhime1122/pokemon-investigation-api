<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class GenerationGameIndex
{
    public function __construct(
        protected readonly int $game_index,
        protected readonly NamedAPIResource $generation,
    )
    {
    }
}
