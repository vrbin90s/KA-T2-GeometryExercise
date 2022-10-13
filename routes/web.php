<?php

use App\Interfaces\Shape\AreaCalculator;
use App\Interfaces\Shape\CarInterface;
use App\Interfaces\Shape\Circle;
use App\Interfaces\Shape\Porche;
use App\Interfaces\Shape\Rectangle;
use App\Interfaces\Shape\Rhombus;
use App\Interfaces\Shape\Square;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/circle', function () {
    $circle = new Circle(5);

    echo "Default Circle Radius: 5" . "</br>";
    echo "</br>";

    echo "Circle Area = " . $circle->area() . "</br>";
    echo "Circle Perimeter = " . $circle->perimeter() . "</br>";

    echo "</br>";
    echo "<a href='../'>&larr; Go back</a>";
});

Route::get('/square', function () {
    echo "Default Square line width: 5" . "</br>";
    echo "</br>";

    $square = new Square (5);
    echo "Square Are = " . $square->area() . "</br>";
    echo "Square Perimeter = " . $square->perimeter() . "</br>";

    echo "</br>";
    echo "<a href='../'>&larr; Go back</a>";
});

Route::get('/rectangle', function () {
    echo "Default Rectangle width: 6.23 and height: 2" . "</br>";
    echo "</br>";

    $rectangle = new Rectangle(6.23, 2);
    echo "Rectangle Area = " . $rectangle->area() . "</br>";;
    echo "Rectangle Perimeter = " . $rectangle->perimeter() . "</br>";

    echo "</br>";
    echo "<a href='../'>&larr; Go back</a>";
});

Route::get('/rhombus', function () {
    echo "Default Rhombus height: 2 and base: 2" . "</br>";
    echo "</br>";

    $rhombus = new Rhombus(2, 2);
    echo "Rhombus Area = " . $rhombus->area() . "</br>";
    echo "Rhombus Perimeter = " . $rhombus->perimeter() . "</br>";

    echo "</br>";
    echo "<a href='../'>&larr; Go back</a>";
});



//App::bind(CarInterface::class, Porche::class);

//Route::get('/new', function()
//{
//    $car = App::make(CarInterface::class);
//    $car->start();
//    $car->gas();
//    $car->brake();
//});
