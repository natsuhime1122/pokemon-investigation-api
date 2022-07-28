<?php

namespace App\Models\PokeApiResponse\Utility\CommonModels;

class MachineVersionDetail
{
    public function __construct(
        protected readonly APIResource $machine,
        protected readonly NamedAPIResource $version_group,
    )
    {
    }
}
