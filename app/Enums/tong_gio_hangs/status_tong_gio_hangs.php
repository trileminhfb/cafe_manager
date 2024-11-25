<?php

declare(strict_types=1);

namespace App\Enums\tong_gio_hangs;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class status_tong_gio_hangs extends Enum
{
    const WAITING = 0;
    const DONE = 1;
}
