<?php

namespace Course\Http\Controllers\FamiliasPrograma;

use Illuminate\Http\Request;
use Course\Http\Requests;
use Course\Http\Controllers\Controller;
use Course\FamiliaPrograma;
use Illuminate\Support\Facades\Input;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        $familiaPrograma = FamiliaPrograma::findOrFail($id);
        $familiaPrograma->fill($request->all());
        $familiaPrograma->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
