<?php

namespace App\Http\Controllers;

use App\Services\GeometryCalculator\ShapeCalculator;
use App\Services\GeometryCalculator\ShapesModels\Circle;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class CircleController extends Controller
{
    public function calculateCircle(ShapeCalculator $shapeCalculator, Request $request)
    {
        if($request->has('radius')) {
            $circleRadius = $request->input('radius');
        } else {
            $circleRadius = 0;
        }

        $circleShape = new Circle($circleRadius);
        $circleArea = $shapeCalculator->area($circleShape);
        $circlePerimeter = $shapeCalculator->perimeter($circleShape);

        return view('circle', [
            'circleArea' => $circleArea,
            'circlePerimeter' => $circlePerimeter
        ]);
    }

}
