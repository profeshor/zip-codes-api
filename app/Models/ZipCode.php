<?php

namespace App\Models;

use App\Models\Settlement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZipCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'zip_code', 'locality', 'state_id', 'settlement_id', 'municipality_id',
    ];

    /**
     * Get the settlement that owns the ZipCode
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function settlement(): BelongsTo
    {
        return $this->belongsTo(Settlement::class);
    }


}
