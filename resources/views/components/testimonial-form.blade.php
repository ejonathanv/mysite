<section>
    <div class="container container-xs">
        <a href="{{ route('testimonials.index') }}">Ir a lista de testimonios</a>
        <div class="mt__4">

            @if(session('success'))
                <div class="success mb__2">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ $action }}" class="admin__form" method="POST" id="testimonialForm">
                @csrf
                @if($method == 'PUT')
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="">Nombre del cliente</label>
                    <input type="text" name="name" value="{{ $testimonial ? $testimonial->name : old('name') }}" autofocus>
                    @error('name')
                        <span class="error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form group">
                    <label for="">Posición del cliente</label>
                    <input type="text" name="position" value="{{ $testimonial ? $testimonial->position : old('position') }}">
                    @error('position')
                        <span class="error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Empresa del cliente</label>
                    <input type="text" name="company" value="{{ $testimonial ? $testimonial->company : old('company') }}">
                    @error('company')
                        <span class="error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Descripción del testimonio</label>
                    <textarea name="description" id="" cols="30" rows="3">{{ $testimonial ? $testimonial->description : old('description') }}</textarea>
                    @error('description')
                        <span class="error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Link del cliente</label>
                    <input type="text" name="link" value="{{ $testimonial ? $testimonial->link : old('link') }}">
                    @error('link')
                        <span class="error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Nombre de usuario del cliente</label>
                    <input type="text" name="username" value="{{ $testimonial ? $testimonial->username : old('username') }}">
                    @error('username')
                        <span class="error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </form>
            <div class="d-flex align-items-center mt__2">
                <button type="submit" class="btn__primary" form="testimonialForm">
                    {{ $testimonial ? 'Actualizar testimonio' : 'Crear testimonio' }}
                </button>

                @if($testimonial)

                    <form action="{{ route('testimonials.destroy', $testimonial) }}" method="POST" class="ml__2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn__link" onclick="return confirm('¿Estás seguro de querer eliminar este testimonio?')">
                            Eliminar testimonio
                        </button>
                    </form>

                @endif
            </div>
        </div>
    </div>
</section>