<?php

namespace App\Http\Controllers;

use App\Models\ZipCode;
use Illuminate\Http\Request;

class ZipCodesController extends Controller
{
    public function get (String $zip_code) {
        return ZipCode::where('zip_code', $zip_code)->first();
    }
}
