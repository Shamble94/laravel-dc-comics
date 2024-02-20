<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|max:50",
            "description" => "required",
            "price" => "required|decimal:2",
            "series" => "required|max:50",
            "sale_date" => "required|date",
            "type" => "required|max:30",
            "artists" => "required",
            "writers" => "required"
        ];

    }
    public function messages(){
        return [
            "title.required" => "Il campo titolo è obbligatorio",
            "title.max" => "Il campo titolo deve essere di massimo 50 caratteri",
            "description.required " => "Il campo descrizione è obbligatorio",
            "price.required" => "Il campo prezzo è obbligatorio",
            "price.decimal" => "Il campo prezzo deve essere un numero decimale (esempio 3.99)",
            "series.required " => "Il campo series è obbligatorio",
            "series.max" => "Il campo series deve essere di massimo 50 caratteri",
            "sale_date.required" => "Il campo sale_date è obbligatorio",
            "sale_date.date" => "Il campo sale_date deve essere una data in formato Y-m-d",
            "type.required" => "Il campo tipo è obbligatorio",
            "type.max" => "Il campo tipo è deve essere di massimo 30 caratteri",
            "artists.required" => "Il campo artists è obbligatorio",
            "writers.required" => "Il campo writers è obbligatorio",
        ];
    }
}