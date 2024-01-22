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
            'title'=> 'required |min:5 |max:250',
            'description' => 'nullable',
            'thumb'=> 'required',
            'price'=> 'required',
            'series'=> 'required',
            'sale_date'=> 'required',
            'type'=> 'required',
        ];
    }
    public function messages()
    {
        return[
            'title.required'=> 'inserire un titolo',
            'title.min'=> 'il titolo deve contenere almeno 5 lettere',
            'thumb.required'=> 'inserire un immagine',
            'price.required'=> 'inserire un prezzo',
            'series.required'=> 'inserire una serie',
            'sale_date.required'=> 'inserire la data di vendita',
            'type.required'=> 'inserire il tipo',
        ];
    }
}
