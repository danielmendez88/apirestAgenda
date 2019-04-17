<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Directorio extends Resource
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
            'id' => $this->id,
            'nombre' => $this->nombre,
            'apepaterno' => $this->apepaterno,
            'apematerno' => $this->apematerno,
            'direccion' => $this->direccion,
            'email' => $this->email,
            'departamento' => $this->departamento,
            'cargo' => $this->cargo,
            'telefonos' => $this->telefonos,
            'area' => $this->area,
            'descripcion' => $this->descripcion,
            'foto' => $this->foto,
        ];
    }
}
