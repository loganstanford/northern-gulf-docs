<?php

namespace App\Enums;

enum ClientType: string
{
    case Individual = 'Individual';
    case Company = 'Company';
    case Trust = 'Trust';

    /**
     * Get all values from the enum.
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
