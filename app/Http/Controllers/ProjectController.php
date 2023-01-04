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
        return view ('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->client = $request->client;
        $project->link = $request->link;
        $project->slug = Str::slug($request->title);
        $project->cover = $this->upload_or_update_image($request, 'cover', $project->cover);
        $project->image_1 = $this->upload_or_update_image($request, 'image_1', $project->image_1);
        $project->image_2 = $this->upload_or_update_image($request, 'image_2', $project->image_2);
        $project->image_3 = $this->upload_or_update_image($request, 'image_3', $project->image_3);

        $project->save();

        return redirect()->route('projects.show', $project)->with('status', 'Proyecto creado con éxito');
    }

    public function upload_or_update_image($request, $type, $image){
        if ($request->hasFile($type)) {
            // Obtenemos el archivo
            $file = $request->file($type);
            // Buscamos la extension del archivo
            $extension = $file->getClientOriginalExtension();
            // Subimos la imagen en la carpeta publica y obtenemos la ruta pero primero modificamos el nombre del archivo
            $filename = Str::slug($request->title) . '-' . hexdec(uniqid()) . '.' . $extension;
            $path = $file->storeAs('projects', $filename, 'projects');
            return $path;
        }else{
            return $image;
        }
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
            'cover' => $this->upload_or_update_image($request, 'cover', $project->cover),
            'image_1' => $this->upload_or_update_image($request, 'image_1', $project->image_1),
            'image_2' => $this->upload_or_update_image($request, 'image_2', $project->image_2),
            'image_3' => $this->upload_or_update_image($request, 'image_3', $project->image_3), 
        ]);

        return redirect()->route('projects.show', $project)->with('status', 'Proyecto actualizado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Proyecto eliminado con éxito');
    }
}
