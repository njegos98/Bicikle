<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BiciklaResource extends JsonResource
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
                'model'=>$this->resource->model,
                 'uzrast'=>$this->resource->uzrast,
                 'boja'=>$this->resource->boja,
                 'materijal'=>$this->resource->materijal,
                 'stanje'=>$this->resource->stanje,
                 'cena'=>$this->resource->cena,
                         ];
         }
    }

