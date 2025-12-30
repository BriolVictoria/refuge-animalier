<?php

namespace App\Enums;

enum AvailabilitySelect: string
{
    case NotAvailable = 'not_available';
    case AvailableDuringTheDay = 'available_during_the_day';
    case AvailableInTheMorning = 'available_in_the_morning';
    case AvailableInTheEvening = 'available_in_the_evening';
}
