<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ChampionRegions extends Enum
{
    const BILGEWATER =   0;
    const DEMACIA =   1;
    const FRELJORD = 2;
    const THE_VOID = 3;
    const IONIA = 4;
    const IXTAL = 5;
    const NOXUS = 6;
    const PILTOVER = 7;
    const SHADOW_ISLES = 8;
    const SHURIMA = 9;
    const TARGON = 10;
    const ZAUN = 11;
    const BANDLE_CITY = 12;
}
