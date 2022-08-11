<?php

namespace App\Models;

use App\Models\SettlementType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Settlement extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'zone_type', 'settlement_type_id'];

    /**
     * Get the settlement type that owns the Settlement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function settlement_type(): BelongsTo
    {
        return $this->belongsTo(SettlementType::class);
    }
}
