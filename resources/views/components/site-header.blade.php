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
                <li><a href="{{ route('websites') }}">Comienza tu página web</a></li>

                @auth
                    <li><a href="{{ route('admin') }}">Administración</a></li>
                @endauth

                <li class="whatsapp">
                    <a href="https://wa.me/message/VLAGDCBE6XMWE1">
                        <img src="{{ asset('img/whatsapp_icon.png') }}" alt="WhatsApp Icon - Jonathan Velazquez">
                    </a>
                </li>
            </ul>
        </nav>
        <div class="mobile__nav">
            <a href="#" class="mobile__nav__icon">
                <i class="fas fa-bars"></i>
            </a>

            <div class="mobile__nav__menu">

                <a href="#" class="mobile__nav__menu__close">
                    <i class="fas fa-times"></i>
                </a>

                <ul>
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('about') }}">Sobre mí</a></li>
                    @if (App\Models\Project::count() > 0)
                        <li><a href="{{ route('projects') }}">Proyectos</a></li>
                    @endif
                    <li><a href="{{ route('websites') }}">Comienza tu página web</a></li>

                    @auth
                        <li><a href="{{ route('admin') }}">Administración</a></li>
                    @endauth

                    <li class="whatsapp">
                        <a href="https://wa.me/message/VLAGDCBE6XMWE1">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>

                    <li class="credits">
                        <p class="small text">
                            &copy; Jonathan Velazquez 2020, Todos los derechos reservados.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mobile__whatsapp__btn">
            <a href="https://wa.me/message/VLAGDCBE6XMWE1">
                <img src="{{ asset('img/whatsapp_icon.png') }}" alt="WhatsApp Icon - Jonathan Velazquez">
            </a>
        </div>
    </div>
</header>