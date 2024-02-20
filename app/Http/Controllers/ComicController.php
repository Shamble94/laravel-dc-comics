<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics', compact("comics"));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "title" => "required|max:30",
            "description" => "required",
            "price" => "required",
            "series" => "required|max:50",
            "sale_date" => "required",
            "type" => "required|max:30",
            "artists" => "required|",
            "writers" => "required|"
        ]);
        
        $form_data = $request->all();

        $comic = new Comic();
        $comic->title = $form_data["title"];
        $comic->description = $form_data["description"];
        $comic->thumb = $form_data["thumb"];
        $comic->price = $form_data["price"];
        $comic->series = $form_data["series"];
        $comic->sale_date = $form_data["sale_date"];
        $comic->type = $form_data["type"];
        $comic->artists = $form_data["artists"];
        $comic->writers = $form_data["writers"];

        $comic->save();

        return redirect()->route("comics.show", ["comic" => $comic]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        
        return view("show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        
        $request->validate([
            "title" => "required|max:30",
            "description" => "required",
            "price" => "required",
            "series" => "required|max:50",
            "sale_date" => "required",
            "type" => "required|max:30",
            "artists" => "required|",
            "writers" => "required|"
        ]);
        
        $form_data = $request->all();

        $comic =  Comic::find($id);
        $comic->title = $form_data["title"];
        $comic->description = $form_data["description"];
        $comic->thumb = $form_data["thumb"];
        $comic->price = $form_data["price"];
        $comic->series = $form_data["series"];
        $comic->sale_date = $form_data["sale_date"];
        $comic->type = $form_data["type"];
        $comic->artists = $form_data["artists"];
        $comic->writers = $form_data["writers"];

        $comic->update();
      
        return redirect()->route("comics.show", ["comic" => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
