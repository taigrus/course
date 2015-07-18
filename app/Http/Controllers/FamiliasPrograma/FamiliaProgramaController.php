<?php

namespace Course\Http\Controllers\FamiliasPrograma;

use Illuminate\Http\Request;
use Course\Http\Requests;
use Course\Http\Controllers\Controller;
use Course\FamiliaPrograma;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class FamiliaProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $orden = Input::get('orden', 'latitud');
        //$familiasPrograma = FamiliaPrograma::orderBy($orden)->paginate(20);
        $familiasPrograma = FamiliaPrograma::sortable()->paginate(20);
        return view('familiasPrograma.index',compact('familiasPrograma'));
    }

    /**
     * Show the form for creating a new resource.$familiasPrograma = FamiliaPrograma::paginate(20);
     *
     * @return Response
     */
    public function create()
    {
        return view("familiasPrograma.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\CreateFamiliaProgramaRequest $request)
    {
        //Obtencion y alidacion de los datos con las reglas que estan en el request creado CreateUserRequest
        $familiaPrograma = FamiliaPrograma::create($request->all());
        $familiaPrograma->save();
        return redirect()->route('familiaprograma.familia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //dd($id);
        $familiaPrograma= FamiliaPrograma::findOrFail($id);
        return view('familiasPrograma.edit', compact('familiaPrograma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */

    //Se usa el request CreateFamiliaProgramaRequest para la validacion de los campos
    public function update(Requests\CreateFamiliaProgramaRequest $request, $id)
    {
        $familiaPrograma = FamiliaPrograma::findOrFail($id);
        $familiaPrograma->fill($request->all());
        $familiaPrograma->save();
        Session::flash('message', 'El registro perteneciente a la familia' . $familiaPrograma->folio . ' fue actualizado correctamente.');
        return redirect()->route('familiaprograma.familia.index');
        //return Redirect::back()->withInput();
        //return Redirect::to(URL::previous());
        //return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $familiaPrograma = FamiliaPrograma::findOrFail($id);

        //User::destroy($id);

        $familiaPrograma -> delete();

        //se debe usar el metodo Set en vez de flash en caso de que se quiera persistir el mensaje.
        Session::flash('message', 'El registro perteneciente a la familia' . $familiaPrograma->folio . ' fue eliminado');

        return redirect()->route('familiaprograma.familia.index');
    }

    public function search() {

        $q = Input::get('folio');

        $searchTerms = explode(' ', $q);

        $query = DB::table('familia');

        foreach($searchTerms as $term)
        {
            $query->where('folio', 'LIKE', '%'. $term .'%');
        }

        $results = $query->get();
        dd($results);
    }
}
