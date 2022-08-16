<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Municipality;
use Illuminate\Http\Request;
use App\Http\Resources\MunicipalityPreview;
use App\Http\Resources\MunicipalitySinglePreview;

class MunicipalitiesController extends Controller
{
    /**
     * Gets musicalities by state
     *
     * @param State $state
     * @return MunicipalityPreview
     */
    public function getMunicipalitiesByState(State $state) {
        return MunicipalityPreview::collection($state->municipalities()->get());
    }

    /**
     * Gets single municipality
     *
     * @param Municipality $municipality
     * @return MunicipalitySinglePreview
     */
    public function get(Municipality $municipality) {
        return new MunicipalitySinglePreview($municipality);
    }
}
