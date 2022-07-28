<?php

namespace App\Models\PokeApiResponse\Pokemon\Abilities;

use App\Models\PokeApiResponse\Utility\CommonModels\Name;
use App\Models\PokeApiResponse\Utility\CommonModels\NamedAPIResource;
use App\Models\PokeApiResponse\Utility\CommonModels\VerboseEffect;

class Ability
{
    /**
     * APIレスポンス
     * https://pokeapi.co/api/v2/ability/{id or name}/
     *
     * @param int $id
     * @param string $name
     * @param bool $is_main_series
     * @param NamedAPIResource $generation
     * @param array<Name> $names
     * @param array<VerboseEffect> $effect_entries
     * @param array<AbilityEffectChange> $effect_changes
     * @param array<AbilityFlavorText> $flavor_text_entries
     * @param array<AbilityPokemon> $pokemon
     */
    public function __construct(
        protected readonly int $id,
        protected readonly string $name,
        protected readonly bool $is_main_series,
        protected readonly NamedAPIResource $generation,
        protected readonly array $names,
        protected readonly array $effect_entries,
        protected readonly array $effect_changes,
        protected readonly array $flavor_text_entries,
        protected readonly array $pokemon,
    )
    {
    }
}
