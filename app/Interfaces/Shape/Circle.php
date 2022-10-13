<?php

namespace App\Interfaces\Shape;

class Circle implements ShapeInterface
{

    private float $radius;
    private float $pi = 3.14;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {

        return pow($this->radius, 2) * $this->pi;
    }

    public function perimeter(): float
    {

        return 2 * $this->pi * $this->radius;
    }
}
