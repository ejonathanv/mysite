<!-- Si el projecto no es null entonces mostramos la siguiente información -->
@if ($project)
    <h3 class="mb__4">
        A continuación se muestra el proyecto más reciente.
    </h3>

    <h4>Título del proyecto</h4>
    <a href="{{ route('projects.show', $project) }}">
        {{ $project->title }}
    </a>

    <h4>Descripción del proyecto</h4>
    <p>
        {{ $project->description }}
    </p>

    <h4>Fecha de creación</h4>
    <p>
        {{ $project->created_at->format('d M, Y') }}
    </p>

    <a href="{{ route('projects.show', $project) }}">
        Ver proyecto
    </a>
@else
    <h4>No hay proyectos</h4>
    <a href="{{ route('projects.create') }}">
        Agregar proyecto
    </a>
@endif