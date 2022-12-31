<section class="login__form">
    <div class="container container-xs">
        <form action="{{ url('login') }}" method="POST">
            @csrf
            <div class="form__group">
                <label for="email">Usuario:</label>
                <input type="email" name="email" id="email" placeholder="Nombre de usuario">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__group mt__2">
                <button type="submit" class="btn__primary">Iniciar sesión</button>
            </div>
        </form>
    </div>
</section>