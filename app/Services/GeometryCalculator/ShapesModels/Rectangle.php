<?php
declare(strict_types=1);

namespace App\Services\GeometryCalculator\ShapesModels;

use App\Services\GeometryCalculator\ShapeInterface;

class Rectangle implements ShapeInterface
{

    private float $width;

    private float $height;


    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateShapeArea(): float
    {
        return $this->width * $this->height;
    }

    public function calculateShapePerimeter(): float
    {
        return 2 * ($this->height + $this->width);
    }
}



