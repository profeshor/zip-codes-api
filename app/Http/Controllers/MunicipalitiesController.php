<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Resources\MunicipalityPreview;

class MunicipalitiesController extends Controller
{
    public function getMunicipalitiesByState(State $state) {
        return MunicipalityPreview::collection($state->municipalities()->get());
    }
}
