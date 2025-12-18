<?php

namespace App\Enums;

enum AdoptingState: string
{
    case InProgress = 'En cours';
    case Done = 'Terminer';
    case Pending = 'En attente';
}
