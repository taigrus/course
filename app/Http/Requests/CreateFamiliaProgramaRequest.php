<?php

namespace Course\Http\Requests;

use Course\Http\Requests\Request;

class CreateFamiliaProgramaRequest extends Request
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
            'folio'         => 'required',
            'direccion'     => 'required|max:255',
            'latitud'       => 'regex:/[\d]{2}.[\d]{2}/'
        ];
    }
}
