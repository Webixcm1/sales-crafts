<?php

declare(strict_types=1);

namespace App\Models\Enum;

enum SuppliersType: string
{
    case ENTREPRISE = 'entreprise';
    case INDIVIDUEL = 'individuel';

    static function allCaseInStr(): array
    {
        return array_map(fn ($item)=> $item->value, self::cases());
    }
}
