<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    <body class="bg-primary">
        <div class="container mt-3">
            <div class="row"> 
                
                <div class="col-12 ">
                    <div class="card mt-3 border-0  fumetto p-3">  
                        <div class="card-title">
                             <h2 class=" mt-2 "> {{ $comic["title"]}}</h2><hr>
                             <span class=" mt-2 "> {{ $comic["description"]}}</span><hr>
                             <h2 class=" mt-2 "> {{ $comic["price"]}}€</h2>
                             <h2 class=" mt-2 "> {{ $comic["series"]}}</h2>
                             <h2 class=" mt-2 "> {{ $comic["sell_date"]}}</h2>
                             <h2 class=" mt-2 "> {{ $comic["type"]}}</h2><hr>
                             <h2 class=" mt-2 "> {{implode(  " , ", json_decode($comic["artists"]))}}</h2>
                             <h2 class=" mt-2 "> {{ implode(  " , ", json_decode($comic["writers"]))}}</h2><hr>
                        </div>
                    </div>
                    <a href="{{ route("comics.edit", ["comic" => $comic->id ])}}"><button class="btn btn-success">Modifica</button></a>
                    {{-- <a href="{{ route("comics.show")}}"><button class="btn btn-warning">Torna alla schermata fumetti</button></a> --}}
                </div>
          
    
            </div>
        </div>
</body>
</html>