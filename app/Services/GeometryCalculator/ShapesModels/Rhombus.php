<?php

namespace App\Services\GeometryCalculator\ShapesModels;

use App\Services\GeometryCalculator\ShapeInterface;

class Rhombus implements ShapeInterface
{
    private float $height;
    private float $base;

    public function __construct(float $height, float $base)
    {
        $this->height = $height;
        $this->base = $base;
    }

    public function calculateShapeArea(): float
    {
        return $this->height * $this->base;
    }

    public function calculateShapePerimeter(): float
    {
        return $this->base * 4;
    }
}
