<?php

namespace App\Enums;

enum FollowUpMethod: string
{
    case Call = 'Call';
    case Email = 'Email';
    case InPerson = 'In-Person';

}
