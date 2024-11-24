<?php

declare(strict_types=1);

namespace App\Enums\san_phams;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class status_san_phams extends Enum
{
    const UNAVAILABLE = 0;
    const AVAILABLE = 1;
}
