<section>
    <div class="container container-sm">

        @if(session('success'))
            <div class="success mb__2">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('testimonials.create') }}">
            Agregar testimonio
        </a>

        @if($testimonials->count() > 0)
        <table class="table mt__2">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Empresa</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $testimonial)
                <tr>
                    <td>{{ $testimonial->name }}</td>
                    <td>{{ $testimonial->position }}</td>
                    <td>{{ $testimonial->company }}</td>
                    <td class="actions">
                        <a href="{{ route('testimonials.show', $testimonial) }}">
                            Editar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <div class="mt__2">
                No hay testimonios
            </div>
        @endif
    </div>
</section>