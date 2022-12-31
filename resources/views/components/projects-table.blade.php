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
    </div>
</section>