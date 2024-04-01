<?php

declare(strict_types=1);

namespace App\Models\Enum;

enum QuoteStatus: string
{
    case ACCEPTER = 'accepter';
    case ANNULER = 'annuler';
    case REFUSER = 'refuser';
    case ATTENTE = 'en attente';

    static function allCaseInStr(): array
    {
        return array_map(fn ($item)=> $item->value, self::cases());
    }
}
