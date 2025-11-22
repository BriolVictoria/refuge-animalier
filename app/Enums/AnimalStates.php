<?php

namespace App\Enums;

enum AnimalStates: string
{
    case Adopted = 'Adopté';
    case InCare = 'En soins';
    case CurrentlyAdopted = 'En cours d‘adoption';
    case AwaitingAdoption = 'En attente d‘adoption';
    case Available = 'Disponible';
}
