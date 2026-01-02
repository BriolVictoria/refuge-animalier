<?php

namespace App\Enums;

enum AnimalStates: string
{
    case Adopted = 'adopted';
    case InCare = 'in_cate';
    case CurrentlyAdopted = 'currently_adopted';
    case AwaitingAdoption = 'awaiting_adoption';
    case Available = 'available';
}
