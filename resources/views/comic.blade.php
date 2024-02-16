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
    <div class="container">
        <div class="row">

            @foreach ($comics as $comic)
            <div class="col-12 col-lg-2 ">
                <div class="card mt-3 border-0 ">
                    <a href="{{ route("show", $comic->id)}}"><img class="thumbs" src="{{ $comic["thumb"] }}" alt=""></a>
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