<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GisementRequest extends FormRequest
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
            'pays' => 'required|min:3|max:20',
            'capaciteEstimee' => 'required|digits_between:1,9|min:1|max:999999999',
            'capaciteConfirmee' => 'required|digits_between:1,9|min:1|max:999999999',
            'composition' => 'required|min:2|max:30',
        ];
    }

    public function message()
    {
        return [

            'pays.required' => 'le pays ne peut pas être vide !',
            'pays.min' => 'Le pays doit avoir minimum quatorze caractères !',
            'pays.max' => 'Le pays doit avoir maximum vingt caractères !',

            'capaciteEstimee.required' => 'La capacité estimé ne peux pas être vide !',
            'capaciteEstimee.min' => 'La capacité estimé doit faire un minimum d\'un caractère',
            'capaciteEstimee.max' => 'La capacité estimé ne peux pas dépasser le nombre 999 999 999',
            'capaciteEstimee.digits_between' => 'Ça doit être un chiffre valide',


            'capaciteConfirmee.required' => 'La capacité confirmé ne peux pas être vide !',
            'capaciteConfirmee.min' => 'La capacité confirmé doit faire un minimum d\'un caractère !',
            'capaciteConfirmee.max' => 'La capacité confirmé ne peux pas être vide !',
            'capaciteConfirmee.digits_between' => 'Ça doit être un chiffre valide',

            'composition.required' => 'La composition du gisement ne peux pas être inexistante !',
            'composition.min' => 'La composition du gisement doit être supérieur à deux caractères !',
            'composition.max' => 'La composition du gisement doit être inférieur à trente caractères !',
    ];
    }
}
