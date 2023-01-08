<x-admin-layout>
    <div class="container container-xs">

        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('account.update') }}" class="admin__form" method="post">

            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="">Nombre completo:</label>
                <input type="text" name="name" id="name" placeholder="Nombre completo" value="{{ $admin ? $admin->name : old('name') }}" required>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Correo electrónico:</label>
                <input type="email" name="email" id="email" placeholder="Correo electrónico" value="{{ $admin ? $admin->email : old('email') }}" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <label for="">Confirmar contraseña:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mt__2">
                <button type="submit" class="btn__primary">Guardar</button>
            </div>
        </form>
    </div>
</x-admin-layout>