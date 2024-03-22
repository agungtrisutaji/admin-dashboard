<?php

namespace App\Http\Resources\Suplier;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SuplierResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nama' => $this->nama,
            'kontak' => $this->kontak,
            'telpon' => $this->telpon,
            'email' => $this->email,
            'alamat' => $this->alamat
        ];
    }
}
