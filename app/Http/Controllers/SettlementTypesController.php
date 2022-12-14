<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SettlementType;
use App\Http\Resources\SettlementTypePreview;

class SettlementTypesController extends Controller
{
    /**
     * Gets single settlement type
     *
     * @param SettlementType $settlementType
     * @return void
     */
    public function get(SettlementType $settlementType) {
        return new SettlementTypePreview($settlementType);
    }
}
