<?php

namespace App\Enums;

enum MessageState: string
{
    case Read = 'read';
    case NotRead = 'not_read';

}
