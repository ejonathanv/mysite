<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        // Actualizamos el titulo, la descripcion, el cliente y el slug del proyecto
        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'client' => $request->client,
            'link' => $request->link,
            'slug' => Str::slug($request->title),
        ]);

        // Si el usuario sube una imagen de portada la actualizamos en el proyecto
        if ($request->hasFile('cover')) {
            // Subimos la imagen en la carpeta publica y obtenemos la ruta pero primero modificamos el nombre del archivo
            $filename = Str::slug($request->title) . '-' . hexdec(uniqid()) . '.' . $request->cover->extension();
            $path = $request->cover->storeAs('projects', $filename, 'projects');
            $project->update([
                'cover' => $path,
            ]);
        }

        // Si el usuario sube la imagen 1 la actualizamos en el proyecto
        if ($request->hasFile('image_1')) {
            // Subimos la imagen en la carpeta publica y obtenemos la ruta pero primero modificamos el nombre del archivo
            $filename = Str::slug($request->title) . '-' . hexdec(uniqid()) . '.' . $request->image_1->extension();
            $path = $request->image_1->storeAs('projects', $filename, 'projects');
            $project->update([
                'image_1' => $path,
            ]);
        }

        // Si el usuario sube la imagen 2 la actualizamos en el proyecto
        if ($request->hasFile('image_2')) {
            // Subimos la imagen en la carpeta publica y obtenemos la ruta pero primero modificamos el nombre del archivo
            $filename = Str::slug($request->title) . '-' . hexdec(uniqid()) . '.' . $request->image_2->extension();
            $path = $request->image_2->storeAs('projects', $filename, 'projects');
            $project->update([
                'image_2' => $path,
            ]);
        }

        // Si el usuario sube la imagen 3 la actualizamos en el proyecto
        if ($request->hasFile('image_3')) {
            // Subimos la imagen en la carpeta publica y obtenemos la ruta pero primero modificamos el nombre del archivo
            $filename = Str::slug($request->title) . '-' . hexdec(uniqid()) . '.' . $request->image_3->extension();
            $path = $request->image_3->storeAs('projects', $filename, 'projects');
            $project->update([
                'image_3' => $path,
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
