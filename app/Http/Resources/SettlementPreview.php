<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use App\Http\Resources\SettlementTypePreview;
use Illuminate\Http\Resources\Json\JsonResource;

class SettlementPreview extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'key' => $this->key,
            'name' => strtoupper(Str::ascii($this->name)),
            'zone_type' => $this-> zone_type,
            'settlement_type' => new SettlementTypePreview($this->settlement_type),
        ];
    }
}
