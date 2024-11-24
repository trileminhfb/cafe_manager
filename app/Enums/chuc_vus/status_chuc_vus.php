<?php

declare(strict_types=1);

namespace App\Enums\chuc_vus;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class status_chuc_vus extends Enum
{
    const DISABLE = 0;
    const AVAILABLE = 1;
}
