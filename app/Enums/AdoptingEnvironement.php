<?php

namespace App\Enums;

enum AdoptingEnvironement: string
{
    case House = 'house';
    case Flat = 'flat';
    case FlatShare = 'flat_share';
    case Studio = 'studio';
    case Other = 'other';

}
