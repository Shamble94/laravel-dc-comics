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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2 class="text-center">Modifica fumetto</h2>
            </div>
            <div class="col-12">
                <form action="{{ route("comics.update", $comic->id)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label class="mt-3" for="title">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Titolo fumetto" required value="{{$comic->title}}">
                    @error('title')
                        <div class ="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="mt-3" for="description">Descrizione</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Descrizione fumetto" value="{{$comic->description}}">
                    @error('description')
                        <div class ="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="mt-3" for="thumb">Immagine</label>
                    <input type="text" name="thumb" id="thumb" class="form-control" value="{{$comic->thumb}}">
                    @error('thumb')
                        <div class ="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="mt-3" for="price">Prezzo</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="Titolo fumetto" value="{{$comic->price}}">
                    @error('price')
                        <div class ="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="mt-3" for="series">Serie</label>
                    <input type="text" name="series" id="series" class="form-control" placeholder="Serie fumetto" value="{{$comic->series}}">
                    @error('series')
                        <div class ="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="mt-3" for="sale_date">Anno di uscita</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Anno di uscita fumetto" value="{{$comic->sale_date}}">
                    @error('sale_date')
                        <div class ="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="mt-3" for="type">Tipo</label>
                    <input type="text" name="type" id="type" class="form-control" placeholder="Tipo fumetto" value="{{$comic->type}}">
                    @error('type')
                        <div class ="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="mt-3" for="artists">Artisti</label>
                    <input type="text" name="artists" id="artists" class="form-control" placeholder="Artisti fumetto" value="{{$comic->artists}}">
                    @error('artists')
                        <div class ="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="mt-3" for="writers">Scrittori</label>
                    <input type="text" name="writers" id="writers" class="form-control" placeholder="Scittori fumetto" value="{{$comic->writers}}">
                    @error('writers')
                        <div class ="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3 ">Inserisci fumetto</button>
                
                
                </form>
            </div>
        </div>
    </div>
</body>
</html>