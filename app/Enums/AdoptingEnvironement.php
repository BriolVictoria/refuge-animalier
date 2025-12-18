<?php

namespace App\Enums;

enum AdoptingEnvironement: string
{
    case House = 'Maison';
    case Flat = 'Appartement';
    case FlatShare = 'Colocation';
    case Studio = 'Studio';
    case Other = 'Autres';
}
