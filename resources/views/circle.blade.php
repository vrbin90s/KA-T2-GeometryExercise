<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geometry Task</title>

    {{-- Font Styles --}}
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Core Styles --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">

</head>
<body>

<section class="shape-calculator-section">
    <div class="container">
        <div class="main-form">
            <div class="go-back-link"><a href="{{ route('home.page')  }}">&larr; Go back</a></div>
            <div class="row">
                <div class="col-md-12 text-center pb-5">
                    <h1>Choose your shape</h1>
                    <small>You wish to calculate</small>
                </div>
            </div>
            <div class="row mb-4 nav-row-wrapper">
                <div class="col-sm-3 nav-btn-wrapper">
                    <a class="btn btn-light active" href="{{ route('circle.shape')  }}">Circle</a>
                </div>
                <div class="col-sm-3 nav-btn-wrapper">
                    <a class="btn btn-light" href="{{ route('square.shape') }}">Square</a>
                </div>
                <div class="col-sm-3 nav-btn-wrapper">
                    <a class="btn btn-light" href="{{ route('rectangle.shape') }}">Rectangle</a>
                </div>
                <div class="col-sm-3 nav-btn-wrapper">
                    <a class="btn btn-light" href="{{ route('rhombus.shape')  }}">Rhombus</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h1>Circle Shape</h1>
                    <h5>Circle Area: {{ $circleArea }} cm</h5>
                    <h5>Circle Perimeter: {{ $circlePerimeter }} cm</h5>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="radius">Circle Radius</label>
                            <input type="number" name="radius" class="form-control" id="number-1" placeholder="Enter your circle radius" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<script src="{{ asset('js/bootstrap.min.js')  }}"></script>
</body>
</html>
