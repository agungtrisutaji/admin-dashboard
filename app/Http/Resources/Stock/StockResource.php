<?php

namespace App\Http\Resources\Stock;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'suplier_id' => $this->suplier_id,
            'name' => $this->name,
            'type' => $this->type,
            'price' => $this->price,
            'quantity' => $this->qty,
            'stored_at' => $this->created_at->diffForHumans(),

        ];
    }
}
