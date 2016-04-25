<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActivityRequest;
use App\Activity;

class ActivityController extends Controller
{
    // Lista las actividades
    public function index()
    {
        $actividades = Activity::orderBy('id', 'ASC')->paginate(env('ITEMS_PAGINACION', 5));
        return view('admin.activity.index')->with('actividades', $actividades);
    }

    // Muestra el formulario de creación
    public function create()
    {
        return view('admin.activity.create');
    }

    // Almacena el formulario de creación
    public function store(ActivityRequest $request)
    {
        $actividad = new Activity($request->all());
        $actividad->save();
        flash()->success('actividad creada correctamente');
        return redirect()->route('admin.activity.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo 'Activity -> show ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo 'Activity -> edit ' . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo 'Activity -> update ' . $request . ' ' . $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'Activity -> destroy ' . $id;
    }
}
