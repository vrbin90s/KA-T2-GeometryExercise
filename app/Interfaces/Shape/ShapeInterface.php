<?php

declare(strict_types=1);

namespace App\Interfaces\Shape;

interface ShapeInterface
{
    public function area(): float;
    public function perimeter(): float;
}
