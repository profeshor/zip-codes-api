<?php

namespace App\Models;

use App\Models\ZipCode;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;

    /**
     * Get all of the municipalities for the State
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municipalities(): HasMany
    {
        return $this->hasMany(Municipality::class);
    }

    /**
     * Get all of the zip codes for the State
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function zip_codes(): HasMany
    {
        return $this->hasMany(ZipCode::class);
    }
}
