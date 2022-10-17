<?php

namespace App\Http\Controllers;

use App\Services\GeometryCalculator\ShapeCalculator;
use App\Services\GeometryCalculator\ShapesModels\Rhombus;
use Illuminate\Http\Request;

class RhombusController extends Controller
{
    public function calculateRhombus(ShapeCalculator $shapeCalculator, Request $request)
    {
        if ($request->has('height') && $request->has('base')) {
            $rhombusHeight = $request->input('height');
            $rhombusBase = $request->input('base');
        } else {
            $rhombusHeight = 0;
            $rhombusBase = 0;
        }

        $rhombusShape = new Rhombus($rhombusHeight, $rhombusBase);
        $rhombusArea = $shapeCalculator->area($rhombusShape);
        $rhombusPerimeter = $shapeCalculator->perimeter($rhombusShape);

        return view('rhombus', [
            'rhombusArea' => $rhombusArea,
            'rhombusPerimeter' => $rhombusPerimeter
        ]);
    }
}
