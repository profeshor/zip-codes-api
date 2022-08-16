<?php

namespace App\Http\Controllers;

use App\Models\ZipCode;
use Illuminate\Http\Request;
use App\Http\Resources\ZipCodePreview;

class ZipCodesController extends Controller
{
    /**
     * Gets single zip code with it's settlements, municipality and state
     *
     * @param String $zip_code
     * @return ZipCodePreview
     */
    public function get (String $zip_code) {
        $zipCodeElement = ZipCode::where('zip_code', $zip_code)->first();
        if ($zipCodeElement == null) {
            abort(404, 'Zip Code Not Found');
        }
        return new ZipCodePreview($zipCodeElement);
    }
}
