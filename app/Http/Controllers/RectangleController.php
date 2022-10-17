<?php

namespace App\Http\Controllers;

use App\Services\GeometryCalculator\ShapeCalculator;
use App\Services\GeometryCalculator\ShapesModels\Rhombus;
use Illuminate\Http\Request;

class RectangleController extends Controller
{
    public function calculateRectangle(ShapeCalculator $shapeCalculator, Request $request)
    {
        if ($request->has('height') && $request->has('width')) {
            $rectangleHeight = $request->input('height');
            $rectangleWidth = $request->input('width');
        } else {
            $rectangleHeight = 0;
            $rectangleWidth = 0;
        }

        $rectangleShape = new Rhombus($rectangleHeight, $rectangleWidth);
        $rectangleArea = $shapeCalculator->area($rectangleShape);
        $rectanglePerimeter = $shapeCalculator->perimeter($rectangleShape);

        return view('rectangle', [
            'rectangleArea' => $rectangleArea,
            'rectanglePerimeter' => $rectanglePerimeter
        ]);
    }
}
