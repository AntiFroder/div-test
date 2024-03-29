<?php

namespace App\Http\Resources\Applications;

use App\Enums\ApplicationStatus;
use App\Http\Resources\Guests\GuestResource;
use App\Http\Resources\Users\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationIndexResource extends JsonResource
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
            'guest' => new GuestResource($this->whenLoaded('guest')),
            'user' => new UserResource($this->whenLoaded('user')),
            'message' => $this->message,
            'status' => $this->status,
            'status_ru' => ApplicationStatus::getDescription($this->status),
            'comment' => $this->comment,
        ];
    }
}
