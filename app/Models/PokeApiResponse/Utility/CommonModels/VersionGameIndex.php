<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class VersionGameIndex
{
    public function __construct(
        protected readonly int $game_index,
        protected readonly NamedAPIResource $version,
    )
    {
    }
}
