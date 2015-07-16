<?php

namespace Course\Http\Requests;

use Course\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditUserRequest extends Request
{
    public function __construct(Route $route)
    {

        $this->route=$route;
    }
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
            'first_name'    => 'required|max:255',
            'last_name'     => 'required|max:255',
            //Obtiene el ID del usuario desde la route (URL) para usarlo en la validacion de abajo
            'email'         => 'required|unique:users,email,' . $this->route->getParameter('users'),
            'password'      => 'confirmed|min:6',
            'type'          => 'required|In:user,admin'
        ];
    }
}
