<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarcheRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nomCompagnie' => 'required|min:3|max:20',
            'noGisement' => 'required|digits_between:1,9|min:1|max:999999999',
            'prixBaril' => 'required|digits_between:1,9|min:1|max:999999999',
            'quantite' => 'required|digits_between:1,9|min:1|max:999999999',
        ];
    }
    public function message()
    {
        return [

            'nomCompagnie.required' => 'le pays ne peut pas être vide !',
            'nomCompagnie.min' => 'Le pays doit avoir minimum trois caractères !',
            'nomCompagnie.max' => 'Le pays doit avoir maximum vingt caractères !',

            'noGisement.required' => 'Le numéro du gisement ne peux pas être vide !',
            'noGisement.min' => 'Le numéro du gisement doit faire minimalement un chiffre',
            'noGisement.max' => 'Le numéro du gisement ne peux pas dépasser le nombre 999 999 999',
            'noGisement.digits_between' => 'Ça doit être un chiffre valide',


            'prixBaril.required' => 'Le prix du baril ne peux pas être vide !',
            'prixBaril.min' => 'Le prix du baril doit faire minimalement un chiffre !',
            'prixBaril.max' => 'Le prix du baril ne peux pas dépasser le nombre 999 999 999 !',
            'prixBaril.digits_between' => 'Ça doit être un chiffre valide',

            'quantite.required' => 'La quantité ne peux pas être inexistante !',
            'quantite.min' => 'La quantité doit faire minimalement un chiffre !',
            'quantite.max' => 'La quantité ne peux pas dépasser le nombre 999 999 999 ! !',
    ];
    }
}
