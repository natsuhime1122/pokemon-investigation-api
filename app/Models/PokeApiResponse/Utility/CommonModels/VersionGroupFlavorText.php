<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class VersionGroupFlavorText
{
    public function __construct(
        protected readonly string $text,
        protected readonly NamedAPIResource $language,
        protected readonly NamedAPIResource $version_group,
    )
    {
    }
}
