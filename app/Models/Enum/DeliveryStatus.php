<?php

namespace App\Models\Enum;

enum DeliveryStatus: string
{
    case EXPEDIE = 'expedie';
    case LIVRE = 'livre';
    case ANNULER = 'annuler';

    static function allCaseInStr(): array
    {
        return array_map(fn ($item)=> $item->value, self::cases());
    }
}
