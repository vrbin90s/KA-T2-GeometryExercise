<?php

namespace App\Http\Controllers;

use App\Interfaces\Shape\CarInterface;
use App\Interfaces\Shape\Rectangle;
use App\Interfaces\Shape\ShapeInterface;

class ShapeController extends Controller
{

    public function area(ShapeInterface $shapeInterface)
    {
        $shapeInterface = new Rectangle(15, 16);

    }

}
