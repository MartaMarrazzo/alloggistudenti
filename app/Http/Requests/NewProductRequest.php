<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewProductRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'user' => 'required',
            'password' => 'required',
            'nome' => 'required',
            'cognome' => 'required',
            'sesso' => 'required',
            'data_nascita' => 'required',
            'tipo' => 'required',
            'immagine' => '',
        ];
    }

}
