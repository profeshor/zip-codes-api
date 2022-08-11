<?php

namespace App\Http\Controllers;

use App\Models\Settlement;
use Illuminate\Http\Request;
use App\Http\Resources\SettlementPreview;

class SettlementsController extends Controller
{
    public function get(Settlement $settlement) {
        return new SettlementPreview($settlement);
    }
}
