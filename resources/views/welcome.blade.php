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
    <div class="title">
        <h1>Kilo Academy Geometry Exercise</h1>
        <h4>This was completed by following Open Closed Principles </h4>
    </div>

    <section class="shape-calculator-section">
        <div class="container">
            <div class="main-form">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div class="text-box">
                            <h1>Geometry Calculator</h1>
                            <small>This is a simple calculator example that calculates the area and perimeter of the shapes identified on the right hand side of this panel. Please select one of them and do your calculation by entering values into their input fields.</small>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <ul>
                            <li class="list-group-item">
                                <a class="btn btn-primary" href="/circle">Calculate Circle Shape</a>
                            </li>
                            <li class="list-group-item">
                                <a class="btn btn-primary mt-1" href="/square">Calculate Square Shape</a>
                            </li>
                            <li class="list-group-item">
                                <a class="btn btn-primary mt-1" href="/rectangle">Calculate Rectangle Shape</a>
                            </li>
                            <li class="list-group-item">
                                <a class="btn btn-primary mt-1"href="/rhombus">Calculate Rhombus Shape</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="{{ asset('js/bootstrap.min.js')  }}"></script>
    </body>
</html>
