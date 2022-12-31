<section>
    <div class="container container-xs">

        @if(session('success'))
            <div class="success mb__2">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('projects.index') }}">
            Ir a lista de proyectos
        </a>

        <form action="{{ $action }}" method="POST" id="projectForm" class="admin__form mt__2" enctype="multipart/form-data">
            @csrf
            @if ($method === 'PUT')
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $project ? $project->title : old('title') }}">
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="description" class="form-control" rows="4">{{ $project ? $project->description : old('description') }}</textarea>
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="client">Cliente</label>
                <input type="text" name="client" id="client" class="form-control" value="{{ $project ? $project->client : old('client') }}">
                @error('client')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" name="link" id="link" class="form-control" value="{{ $project ? $project->link : old('link') }}">
                @error('link')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="cover">Portada (Medida recomendada: 1600x700)</label>
                <input type="file" name="cover" id="cover" class="form-control">
                @error('cover')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            @if($project)
                @if($project->cover)
                    <img src="{{ asset('uploads/' . $project->cover) }}" alt="{{ $project->title }}" class="img__md">
                @endif
            @endif


            <div class="form-group">
                <label for="image_1">Imagen 1 (Medida recomendada: 1200x1200)</label>
                <input type="file" name="image_1" id="image_1" class="form-control">
                @error('image_1')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            @if($project)
                @if($project->image_1)
                    <img src="{{ asset('uploads/' . $project->image_1) }}" alt="{{ $project->title }}" class="img__md">
                @endif
            @endif

            <div class="form-group">
                <label for="image_2">Imagen 2 (Medida recomendada: 1200x1200)</label>
                <input type="file" name="image_2" id="image_2" class="form-control">
                @error('image_2')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            @if($project)
                @if($project->image_2)
                    <img src="{{ asset('uploads/' . $project->image_2) }}" alt="{{ $project->title }}" class="img__md">
                @endif
            @endif

            <div class="form-group">
                <label for="image_3">Imagen 3 (Medida recomendada: 1200x1200)</label>
                <input type="file" name="image_3" id="image_3" class="form-control">
                @error('image_3')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            @if($project)
                @if($project->image_3)
                    <img src="{{ asset('uploads/' . $project->image_3) }}" alt="{{ $project->title }}" class="img__md">
                @endif
            @endif
        </form>

        <div class="mt__2 d-flex align-items-center">
            <button type="submit" form="projectForm" class="btn__primary">
                @if ($method === 'PUT')
                    Actualizar proyecto
                @else
                    Crear proyecto
                @endif
            </button>

            @if($method === 'PUT')
                <form action="{{ $action }}" method="POST" class="d-inline-block ml__2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn__link" onclick="return confirm('¿Estás seguro de eliminar este proyecto?')">
                        Eliminar proyecto
                    </button>
                </form>
            @endif
        </div>
    </div>
</section>