<?php

namespace App\Interfaces\Shape;

class Rhombus implements ShapeInterface
{
    private float $height;
    private float $base;

    public function __construct(float $height, float $base)
    {
        $this->height = $height;
        $this->base = $base;
    }

    public function area(): float
    {
        return $this->height * $this->base;
    }

    public function perimeter(): float
    {
        return $this->base * 4;
    }
}
