<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvFormRequest extends FormRequest
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
        return [/*
            'matricule' => 'integer',
            'nom' => 'required',
            'contact'=>'integer',
            'adresse'=>'required',
            'email' => 'email',
            'lieu'=>'required',
            'diplome'=>'required',
            'annee'=>'required',
            'information'=>'required',
            'pourcentage'=>'required',
            'texte'=>'required',
            'description'=>'required',
            'langue'=>'required'*/
        ];

    }

    public function messages()
    {
        return [
            //'matricule' => "Veuillez xchvjbk"

        ];
    }
}
