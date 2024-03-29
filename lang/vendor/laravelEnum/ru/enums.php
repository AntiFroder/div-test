<?php

declare(strict_types=1);

use App\Enums\ApplicationStatus;

return [
    ApplicationStatus::class => [
        ApplicationStatus::ACTIVE => 'Активный',
        ApplicationStatus::RESOLVED => 'Завершенный'
    ]
];
