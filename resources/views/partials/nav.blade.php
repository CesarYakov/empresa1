<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ setActivo('home') }}">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{ setActivo('nosotros') }}">
                    <a class="nav-link" href="nosotros">Nosotros</a>
                </li>
                <li class="nav-item {{ setActivo('servicios') }}">
                    <a class="nav-link" href="servicios">Servicios</a>
                </li>
                <li class="nav-item {{ setActivo('contacto') }}">
                    <a class="nav-link" href="contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
