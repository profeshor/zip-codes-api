<?php

namespace App\Models;

use App\Models\State;
use App\Models\Settlement;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZipCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'zip_code', 'locality', 'state_id', 'settlement_id', 'municipality_id',
    ];

    /**
     * Get all of the settlements for the ZipCode
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function settlements(): HasMany
    {
        return $this->hasMany(Settlement::class);
    }

    /**
     * Get the state that owns the ZipCode
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

     /**
     * Get the municipality that owns the ZipCode
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }
}
