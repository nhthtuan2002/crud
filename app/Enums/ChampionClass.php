<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ChampionClass extends Enum
{
    const TANK =   0;
    const ASSASSIN =   1;
    const MARKSMAN = 2;
    const FIGHTER = 3;
    const MAGE = 4;
    const SUPPORT = 5;
}
