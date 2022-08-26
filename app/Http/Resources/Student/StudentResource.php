<?php

namespace App\Http\Resources\Student;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'id' => $this->id,
            'sname'     => $this->sname,
            'city'      => $this->city,
            'distance'  => $this->distance,
            'moons'     => $this->moons,
            'pname'     => $this->when(
                $this->getParent() != null,
                $this->getParent->name,
            ),
            'year'      => $this->getYear->year,
            'mname'      => $this->getMajor->name,
        ];
    }
}
