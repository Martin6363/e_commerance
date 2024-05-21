<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Hashids;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->hashId($this->id),
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'picture' => asset('storage/' . $this->picture),
            'products_count' => $this->products_count,
            'created_at' => $this->created_at->format('d-m-Y')
        ];
    }

    /**
     * Hash the ID using Hashids.
     *
     * @param int $id
     * @return string
     */
    private function hashId(int $id): string
    {
        return Hashids::encode($id);
    }
}
