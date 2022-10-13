<?php
declare(strict_types=1);

namespace App\Interfaces\Shape;

class Rectangle implements ShapeInterface
{

    private float $width;

    private float $height;


    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float
    {
        return $this->width * $this->height;
    }

    public function perimeter(): float
    {
        return 2 * ($this->height + $this->width);
    }
}



