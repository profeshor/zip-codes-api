<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Resources\StatePreview;

class StatesController extends Controller
{
    /**
     * Gets States list
     *
     * @return
     */
    public function index() {
        $states = State::all();
        return StatePreview::collection($states);
    }
}
