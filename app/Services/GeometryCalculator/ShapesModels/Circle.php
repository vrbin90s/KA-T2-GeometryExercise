<?php

namespace App\Services\GeometryCalculator\ShapesModels;

use App\Services\GeometryCalculator\ShapeInterface;

class Circle implements ShapeInterface
{

    private float $radius;
    private float $pi = 3.14;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateShapeArea(): float
    {

        return round(pow($this->radius, 2) * $this->pi, 2);
    }

    public function calculateShapePerimeter(): float
    {

        return round(2 * $this->pi * $this->radius, 2);
    }

}
