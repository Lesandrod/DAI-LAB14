<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tabla de Peliculas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                    @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="navbar-brand text-success">Home</a>
                            @else
                            @endauth
                    @endif
            </div>
        </nav>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="cold-md-10">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

                    </div>
                    </div>

                    @foreach ($peliculas as $pelicula)
                    <div class="card m-2" style="width: 18rem; gap:20px;">
                    <div class="card-header text-primary">
                    <b> Nombre:</b> {{$pelicula->nombre}}
                    </div>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item"> <b>Director : </b> {{$pelicula->director}}</li>
                        <li class="list-group-item"> <b>Genero : </b> {{$pelicula->genero}}</li>
                        <li class="list-group-item"> <b>Actor Principal : </b> {{$pelicula->actor1}}</li>
                        <li class="list-group-item"> <b>Actor Secundario : </b> {{$pelicula->actor2}}</li>
                    </ul>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
