<header class="header">
    <div class="container">
        <div class="header__logo">
            <a href="{{ route('home') }}">
                <h1>
                    Jonathan Velazquez
                </h1>
            </a>
        </div>
        <nav class="header__nav">
            <ul>
                <li><a href="{{ route('home') }}">Volver al sitio</a></li>
                <li>
                    <a href="{{ route('admin') }}">
                        Escritorio
                    </a>
                </li>
                <li>
                    <a href="{{ route('projects.index') }}">
                        Proyectos
                    </a>
                </li>
                <li>
                    <a href="{{ route('testimonials.index') }}">
                        Testimonios
                    </a>
                </li>
                <li>
                    <a href="#">
                        Artículos
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            Cerrar sesión
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</header>