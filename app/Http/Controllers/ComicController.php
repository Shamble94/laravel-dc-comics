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
            "sale_date" => "required|date",
            "type" => "required|max:30",
            "artists" => "required|",
            "writers" => "required|"
        ]); 
        
        $form_data = $request->all();

        $comic = new Comic();

        $comic->fill($form_data);
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
        

        $form_data = $this->validation($request->all()) ;
        
        $comic =  Comic::find($id);
       

        $comic->update($form_data);
      
        return redirect()->route("comics.show", ["comic" => $comic]);

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route("comics.index", ["comic" => $comic]);
    }
    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                "title" => "required|max:30",
                "description" => "required",
                "price" => "required|numeric",
                "series" => "required|max:50",
                "sale_date" => "required|date",
                "type" => "required|max:30",
                "artists" => "required|",
                "writers" => "required|"
            ],
            [
                "title.required" => "Il campo titolo è obbligatorio",
                "title.max" => `Il campo titolo deve essere di massimo 30 caratteri`,
                "description.required " => "Il campo descrizione è obbligatorio",
                "price.required " => "Il campo prezzo è obbligatorio",
                "price.numeric " => "Il campo prezzo deve essere un numero",
                "series.required " => "Il campo series è obbligatorio",
                "series.max " => "Il campo series deve essere di massimo 50 caratteri",
                "sale_date.required " => "Il campo sale_date è obbligatorio",
                "sale_date.date " => "Il campo sale_date deve essere una data in formato Y-m-d",
                "type.required " => "Il campo tipo è obbligatorio",
                "type.max " => "Il campo tipo è deve essere di massimo 30 caratteri",
                "artists.required " => "Il campo artists è obbligatorio",
                "writers.required " => "Il campo writers è obbligatorio",
            ]
            )->validate();
            return $validator;
        }

}
