<?php

use App\Http\Controllers\CircleController;
use App\Http\Controllers\RectangleController;
use App\Http\Controllers\RhombusController;
use App\Http\Controllers\SquareController;
use App\Services\GeometryCalculator\ShapeCalculator;
use App\Services\GeometryCalculator\ShapesModels\Circle;
use App\Services\GeometryCalculator\ShapesModels\Rectangle;
use App\Services\GeometryCalculator\ShapesModels\Rhombus;
use App\Services\GeometryCalculator\ShapesModels\Square;
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

Route::view('/', 'welcome')->name('home.page');

Route::get('/circle', [CircleController::class, 'calculateCircle'])->name('circle.shape');
Route::get('/square', [SquareController::class, 'calculateSquare'])->name('square.shape');
Route::get('/rectangle', [RectangleController::class, 'calculateRectangle'])->name('rectangle.shape');
Route::get('/rhombus', [RhombusController::class, 'calculateRhombus'])->name('rhombus.shape');


