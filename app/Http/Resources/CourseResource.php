<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price'=>$this->price,
            'teacher_id'=>$this->teacher_id,
            'teacher'=>TeacherResource::make($this->whenLoaded('teacher')),
            'created_at' => $this->created_at->format('Y-m-d'),
        ];
    }
}
