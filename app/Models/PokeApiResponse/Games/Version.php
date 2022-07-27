<?php

namespace App\Models\PokeApiResponse\Games;

use App\Models\PokeApiResponse\Utility\CommonModels\Name;
use App\Models\PokeApiResponse\Utility\CommonModels\NamedAPIResource;

class Version
{
    /**
     * https://pokeapi.co/api/v2/version/{id or name}/からのレスポンス値
     *
     * @param int $id
     * @param string $name
     * @param array<Name> $names
     * @param NamedAPIResource $version_group
     */
    public function __construct(
        protected readonly int $id,
        protected readonly string $name,
        protected readonly array $names,
        protected readonly NamedAPIResource $version_group,
    )
    {
    }

    public function toArray(): array
    {
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'names'         => $this->names,
            'version_group' => $this->version_group
        ];
    }
}
