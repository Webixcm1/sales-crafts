<?php

declare(strict_types=1);

namespace App\Models\Enum;

enum ClientType: string
{
    case COMPANY = 'company';
    case INDIVIDUAL = 'individual';

    static function allCaseInStr(): array
    {
        return array_map(fn ($item)=> $item->value, self::cases());
    }
}
