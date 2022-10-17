<?php

namespace App\Http\Controllers;

use App\Services\GeometryCalculator\ShapeCalculator;
use App\Services\GeometryCalculator\ShapesModels\Square;
use Illuminate\Http\Request;

class SquareController extends Controller
{
    public function calculateSquare(ShapeCalculator $shapeCalculator, Request $request)
    {
        if ($request->has('length')) {
            $squareLength = $request->input('length');
        } else {
            $squareLength = 0;
        }

        $squareShape = new Square($squareLength);
        $squareArea = $shapeCalculator->area($squareShape);
        $squarePerimeter = $shapeCalculator->perimeter($squareShape);

        return view('square', [
            'squareArea' => $squareArea,
            'squarePerimeter' => $squarePerimeter
        ]);
    }
}
