<?php

namespace App\Models\PokeApiResponse\Utility\Languages;

use App\Models\PokeApiResponse\Utility\CommonModels\Name;

class Language
{
    /**
     * https://pokeapi.co/api/v2/language/{id or name}/
     *
     * @param int $id
     * @param string $name
     * @param bool $official
     * @param string $iso639
     * @param string $iso3166
     * @param array<Name> $names
     */
    public function __construct(
        protected readonly int $id,
        protected readonly string $name,
        protected readonly bool $official,
        protected readonly string $iso639,
        protected readonly string $iso3166,
        protected readonly array $names,
    )
    {
    }
}
