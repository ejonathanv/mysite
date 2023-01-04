<section>
    <div class="container container-sm">

        @if(session('success'))
            <div class="success mb__2">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('projects.create') }}">
            Agregar proyecto
        </a>

        @if($projects->count())
        <table class="table mt__2">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Título</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->client }}</td>
                    <td>{{ $project->title }}</td>
                    <td class="actions">
                        <a href="{{ route('projects.show', $project) }}">
                            Editar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <div class="info mt__2">
                No hay proyectos
            </div>
        @endif
    </div>
</section>