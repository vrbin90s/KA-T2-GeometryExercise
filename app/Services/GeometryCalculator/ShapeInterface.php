<?php

declare(strict_types=1);

namespace App\Services\GeometryCalculator;

interface ShapeInterface
{
    public function calculateShapeArea(): float;
    public function calculateShapePerimeter(): float;
}
