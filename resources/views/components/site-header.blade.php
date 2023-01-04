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
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('about') }}">Sobre mí</a></li>
                @if (App\Models\Project::count() > 0)
                    <li><a href="{{ route('projects') }}">Proyectos</a></li>
                @endif
                <li><a href="{{ route('websites') }}">Precios</a></li>

                @auth
                    <li><a href="{{ route('admin') }}">Administración</a></li>
                @endauth

                <li class="whatsapp">
                    <a href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>