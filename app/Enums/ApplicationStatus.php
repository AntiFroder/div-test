<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

final class ApplicationStatus extends Enum implements LocalizedEnum
{
    const ACTIVE = 'Active';
    const RESOLVED = 'Resolved';
}
