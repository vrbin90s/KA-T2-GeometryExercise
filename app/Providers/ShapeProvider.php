<?php

namespace App\Providers;


use App\Interfaces\Shape\Rectangle;
use App\Interfaces\Shape\ShapeInterface;
use App\Services\GeometryCalculator\ShapeCalculator;
use Illuminate\Support\ServiceProvider;

class ShapeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ShapeInterface::class, ShapeCalculator::class);
    }

}
