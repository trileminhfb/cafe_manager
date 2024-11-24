<?php

declare(strict_types=1);

namespace App\Enums\nha_cung_caps;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class status_nha_cung_caps extends Enum
{
    const DISABLE = 0;
    const AVAILABLE = 1;
}
