<?php

namespace App\Http\Controllers\PokeApi;

use App\Http\Controllers\Controller;
use App\UseCases\PokeApi\GetVersionAction;

class VersionController extends Controller
{
    public function index(GetVersionAction $action)
    {
        $action();
    }
}
