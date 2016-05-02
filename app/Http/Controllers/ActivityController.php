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

    // Almacena el modelo
    public function store(ActivityRequest $request)
    {
        $actividad = new Activity($request->all());
        $actividad->save(); 
        // Las dos líneas anteriores se pueden combinar en una sola: 
        // $actividad = Activity::create($request->all()); 
        // o también, con el método fill():
        // $actividad = new Activity();
        // $actividad->fill($request->all());
        // $actividad->save();
        flash()->success('actividad creada correctamente');
        return redirect()->route('admin.activity.index');
    }

    // Muestra el modelo referenciado
    public function show($id)
    {
        echo 'Activity -> show ' . $id;
    }

    // Muestra el formulario de edición
    public function edit($id)
    {
        $actividad = Activity::findBySlugOrIdOrFail($id);

        return view('admin.activity.edit', compact('actividad'));
    }

    // Actualiza el modelo
    public function update(ActivityRequest $request, $id)
    {
        $actividad = Activity::findBySlugOrIdOrFail($id);
        $actividad->fill($request->all());
        $actividad->save();

        flash()->success('actividad actualizada correctamente');
        return redirect()->route('admin.activity.index');
    }

    // Borra el modelo
    public function destroy($id)
    {
        $actividad = Activity::findOrFail($id);
        $actividad->delete();
        
        flash()->success('actividad eliminada correctamente');
        return redirect()->route('admin.activity.index');
    }
}
