<?php

declare(strict_types=1);

namespace App\Enums\nhap_khos;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class status_nhap_khos extends Enum
{
    const WAITING = 0;
    const DONE = 1;
}
