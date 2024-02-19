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

 <body>
    <div class="container mt-3">
        <div class="row"> -
            <h1>Clicca sul fumetto per visualizzarne i dettagli</h1>
            <a href="{{ route("comics.create")}}"><button class="btn btn-primary">Aggiungi fumetto</button></a>
            @foreach ($comics as $comic) 
            <div class="col-2 ">
                <div class="card mt-3 border-0  fumetto">
                    @if($comic->thumb == null)
                    <img src="{{ Vite::asset("resources/img/placeholder.png")}}" alt="">
                    @else
                    <img class="thumbs" src="{{ $comic["thumb"] }}" alt="">
                    @endif
                    <div class="card-title">
                        <a href="{{ route("comics.show", $comic->id)}}"><h6 class=" mt-2 "> {{ $comic["title"]}}</h6></a>
                    </div>
                    </div>
                </a>
            </div>
        @endforeach

        </div>
    </div>
    
</body> 

</html>