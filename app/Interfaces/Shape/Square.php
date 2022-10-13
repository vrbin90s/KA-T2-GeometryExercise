<?php

namespace App\Interfaces\Shape;

class Square implements ShapeInterface
{
    private float $length;

    public function __construct(float $length)
    {
        $this->length = $length;
    }

    public function area(): float
    {
        return pow($this->length, 2);
    }

    public function perimeter(): float
    {
        return 2 * pow($this->length, 2);
    }
}
