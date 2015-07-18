<?php

namespace Course\Http\Requests;

use Course\Http\Requests\Request;

class EditFamiliaProgramaRequest extends Request
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
            'folio'         => 'required|max:15',
            'direccion'     => 'required|max:255',
            'latitud'       => 'required'
        ];
    }
}
