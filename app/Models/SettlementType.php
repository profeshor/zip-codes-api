<?php

namespace App\Models;

use App\Models\Settlement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SettlementType extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];

    /**
     * Get all of the settlements for the SettlementType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function settlements(): HasMany
    {
        return $this->hasMany(Settlement::class);
    }
}
