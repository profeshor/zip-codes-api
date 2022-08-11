<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use App\Http\Resources\StatePreview;
use Illuminate\Http\Resources\Json\JsonResource;

class MunicipalitySinglePreview extends JsonResource
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
            'key' =>  $this->id,
            'name' => strtoupper(Str::ascii($this->name)),
            'federal_entity' => new StatePreview($this->state)
        ];
    }
}
