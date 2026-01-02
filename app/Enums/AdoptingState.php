<?php

namespace App\Enums;

enum AdoptingState: string
{
    case InProgress = 'in_progress';
    case Done = 'done';
    case Pending = 'pending';
}
