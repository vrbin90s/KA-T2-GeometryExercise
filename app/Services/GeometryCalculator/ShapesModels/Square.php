<?php

namespace App\Services\GeometryCalculator\ShapesModels;

use App\Services\GeometryCalculator\ShapeInterface;

class Square implements ShapeInterface
{
    private float $length;

    public function __construct(float $length)
    {
        $this->length = $length;
    }

    public function calculateShapeArea(): float
    {
        return pow($this->length, 2);
    }

    public function calculateShapePerimeter(): float
    {
        return 2 * pow($this->length, 2);
    }
}
