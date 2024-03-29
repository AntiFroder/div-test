<?php

declare(strict_types=1);

namespace App\Http\Service\Applications;

use App\Http\Resources\Applications\ApplicationIndexResource;
use App\Models\Application;

class ApplicationService
{
    public function getIndex(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return ApplicationIndexResource::collection(Application::with(['guest', 'user'])->paginate(10));
    }
}
