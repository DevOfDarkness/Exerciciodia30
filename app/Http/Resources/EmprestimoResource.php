<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\emprestimo;
class EmprestimoResource extends JsonResource
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
          'id'=> $this->id,
          'status'=>$this->status,
          'dataDeTermino'=>$this->dataDeTermino,
        ];
    }
}
