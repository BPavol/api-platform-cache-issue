<?php

declare(strict_types=1);

namespace App\Entity;

final class Payment
{
    public function __construct(
        public readonly string $id
    )
    {
    }
}
