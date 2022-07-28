<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class VersionEncounterDetail
{
    /**
     * @param NamedAPIResource $version
     * @param int $max_chance
     * @param array<Encounter> $encounter_details
     */
    public function __construct(
        protected readonly NamedAPIResource $version,
        protected readonly int $max_chance,
        protected readonly array $encounter_details,
    )
    {
    }
}
