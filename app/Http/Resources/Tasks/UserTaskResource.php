<?php

namespace App\Http\Resources\Tasks;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserTaskResource extends JsonResource
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
            'notes' => $this->notes,
            'is_completed' => $this->resource->isCompleted(),
            'completed_at' => $this->when(
                $this->resource->isCompleted(),
                $this->completed_at
            )
        ];
    }
}
