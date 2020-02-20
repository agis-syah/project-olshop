<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DaftarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "nama" => $this->nama,
            "email" => $this->email,
            "password" => $this->password,
            "confirmed_password" => $this->confirmed_password
        ];
    }
}
