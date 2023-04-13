<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    public static $wrap = 'tasks';

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'    => $this->id,
            'description' => $this->description,
            'created_at'  => $this->created_at,
        ];
            
    }
    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->header('Accept', 'application/json');
    }
}
