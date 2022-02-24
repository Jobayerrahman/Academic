<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css">

    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/student-list') }}">S-CRUD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/student-list') }}">Home
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/course-view') }}">Course</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        <div id="app"> 
            @yield('content')
        </div>
    </body>
</html>