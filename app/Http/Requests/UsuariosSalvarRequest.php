<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuariosSalvarRequest extends FormRequest
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

        $url = explode("/", url()->current());
        $unique = is_numeric($url[count($url) - 2])
            ? Rule::unique('users', 'email')->ignore($url[count($url) - 2])
            : Rule::unique('users', 'email');

        return [
            'nombre' => 'required',
            'email'  => 'required|email|'.$unique,
            'rol'    => 'required|exists:roles,id',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Por favor ingrese el nombre',
            'rol.required'    => 'Por favor ingrese el rol',
            'rol.exists'      => 'El role no existe en la base de datos',
            'email.required'  => 'Por favor ingrese un email',
            'email.unique'    => 'El email ya existe en la base de datos',
            'email.email'     => 'Por favor ingrese email con formato correcto',
        ];
    }
}
