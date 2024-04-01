<?php

declare(strict_types=1);

namespace App\Models\Enum;

enum OrderStatus: string
{
    case ANNULER = 'annuler';
    case ENATTENTE = 'en attente';
    case PAYE = 'paye';
    case NONPAYE = 'non paye';

    static function allCaseInStr(): array
    {
        return array_map(fn ($item)=> $item->value, self::cases());
    }
}
