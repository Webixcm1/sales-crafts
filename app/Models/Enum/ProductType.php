<?php

declare(strict_types=1);

namespace App\Models\Enum;

enum ProductType: string
{
    case PRODUIT = 'produit';
    case SERVICE = 'service';

    static function allCaseInStr(): array
    {
        return array_map(fn ($item)=> $item->value, self::cases());
    }
}
