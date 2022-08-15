<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use App\Http\Resources\StatePreview;
use App\Http\Resources\SettlementPreview;
use App\Http\Resources\MunicipalityPreview;
use Illuminate\Http\Resources\Json\JsonResource;

class ZipCodePreview extends JsonResource
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
            'zip_code' => $this->zip_code,
            'locality' => strtoupper(Str::ascii($this->locality)),
            'settlements' => SettlementPreview::collection($this->settlements),
            'municipality' => new MunicipalityPreview($this->municipality),
            'federal_entity' => new StatePreview($this->state)
        ];
    }
}
