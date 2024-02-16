<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <body class="bg-primary">
        <div class="container mt-3">
            <div class="row"> 
                
                <div class="col-2 ">
                    <div class="card mt-3 border-0  fumetto">
                          
                        <div class="card-title">
                             <h2 class=" mt-2 "> {{ $comic["title"]}}</h2><hr>
                             <span class=" mt-2 "> {{ $comic["description"]}}</span><hr>
                             <h2 class=" mt-2 "> {{ $comic["price"]}}</h2>
                             <h2 class=" mt-2 "> {{ $comic["series"]}}</h2>
                             <h2 class=" mt-2 "> {{ $comic["sell_date"]}}</h2>
                             <h2 class=" mt-2 "> {{ $comic["type"]}}</h2><hr>
                             <h2 class=" mt-2 "> {{ implode(" , ", json_decode($comic["artists"]))}}</h2>
                             <h2 class=" mt-2 "> {{ implode(" , ", json_decode($comic["writers"]))}}</h2><hr>
                        </div>
                        </div>
                    </a>
                </div>
          
    
            </div>
        </div>
</body>
</html>