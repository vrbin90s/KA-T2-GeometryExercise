<?php

namespace Tests\Unit;

use App\Services\GeometryCalculator\ShapeCalculator;
use App\Services\GeometryCalculator\ShapesModels\Circle;
use PHPUnit\Framework\TestCase;

class CalculateShapePerimeterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_calculateShapePerimeter()
    {
        $shapeCalculator = new ShapeCalculator();

        $circleShape = new Circle(5);

        // Check if shape return correct calculated perimeter value
        $this->assertEquals(31.4, $shapeCalculator->perimeter($circleShape));
    }
}
