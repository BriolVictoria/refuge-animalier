<?php

namespace App\Enums;

enum AvailabilitySelect: string
{
    case NotAvailable = 'Pas disponible';
    case AvailableDuringTheDay = 'Disponible pendant la journée';
    case AvailableInTheMorning = 'Disponible le matin';
    case AvailableInTheEvening = 'Disponible le soir';
}
