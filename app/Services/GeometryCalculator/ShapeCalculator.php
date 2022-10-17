<?php

namespace App\Services\GeometryCalculator;

class ShapeCalculator
{
    public function area(ShapeInterface $shape): float
    {
        return $shape->calculateShapeArea();
    }

    public function perimeter(ShapeInterface $shape): float
    {
        return $shape->calculateShapePerimeter();
    }
}
