<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

 <body class="bg-primary">
    <div class="container mt-3">
        <div class="row"> -
            <h1>Clicca sul fumetto per visualizzarne i dettagli</h1>
            @foreach ($comics as $comic) 
            <div class="col-2 ">
                <div class="card mt-3 border-0  fumetto">
                      <a href="{{ route("comics.show", $comic->id)}}"> <img class="thumbs" src="{{ $comic["thumb"] }}" alt=""></a>
                    <div class="card-title">
                         <h6 class=" mt-2 "> {{ $comic["title"]}}</h6>
                    </div>
                    </div>
                </a>
            </div>
        @endforeach

        </div>
    </div>
    
</body> 

</html>