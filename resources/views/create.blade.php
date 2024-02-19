<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            <div class="col-12">
                <h2 class="text-center">Inserisci nuovo fumetto</h2>
            </div>
            <div class="col-12">
                <form action="{{ route("comics.store")}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="mt-3" for="title">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Titolo fumetto" required>
                </div>
                <div class="form-group">
                    <label class="mt-3" for="thumb">Descrizione</label>
                    <textarea type="text" name="thumb" id="thumb" class="form-control" placeholder="Descrizione fumetto"> </textarea>
                </div>
                <div class="form-group">
                    <label class="mt-3" for="thumb">Immagine</label>
                    <input type="text" name="thumb" id="thumb" class="form-control" >
                </div>
                <div class="form-group">
                    <label class="mt-3" for="price">Prezzo</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="Titolo fumetto">
                </div>
                <div class="form-group">
                    <label class="mt-3" for="series">Serie</label>
                    <input type="text" name="series" id="series" class="form-control" placeholder="Serie fumetto">
                </div>
                <div class="form-group">
                    <label class="mt-3" for="sale_date">Anno di uscita</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Anno di uscita fumetto">
                </div>
                <div class="form-group">
                    <label class="mt-3" for="type">Tipo</label>
                    <input type="text" name="type" id="type" class="form-control" placeholder="Tipo fumetto">
                </div>
                <div class="form-group">
                    <label class="mt-3" for="artists">Artisti</label>
                    <input type="text" name="artists" id="artists" class="form-control" placeholder="Artisti fumetto">
                </div>
                <div class="form-group">
                    <label class="mt-3" for="writers">Scrittori</label>
                    <input type="text" name="writers" id="writers" class="form-control" placeholder="Scittori fumetto">
                </div>
                <button type="submit" class="btn btn-primary mt-3 ">Inserisci fumetto</button>
                
                </form>
            </div>
        </div>
    </div>
</body>
</html>

