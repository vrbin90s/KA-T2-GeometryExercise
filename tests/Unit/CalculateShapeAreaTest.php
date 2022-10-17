<?php

namespace Tests\Unit;

use App\Services\GeometryCalculator\ShapeCalculator;
use App\Services\GeometryCalculator\ShapesModels\Circle;
use PHPUnit\Framework\TestCase;

class CalculateShapeAreaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_calculateShapeArea()
    {
        $shapeCalculator = new ShapeCalculator();

        $circleShape = new Circle(5);

        $calculatedOutput = $shapeCalculator->area($circleShape);

        // Check if shape class return correct calculated area value
        $this->assertEquals(78.5, $calculatedOutput);
    }
}
