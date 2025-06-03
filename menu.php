<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" class="img-fluid" width="30px" height="30px" alt="">
            Sistema Gestión
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                        <i class="bi bi-house-door"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?seccion=clientes&accion=listar">
                        <i class="bi bi-people"></i> Clientes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?seccion=provincias&accion=listar">
                        <i class="bi bi-map"></i> Provincias
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?seccion=provincias&accion=listar">
                        <i class="bi bi-geo-alt"></i> Localidades
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="barrios.html">
                        <i class="bi bi-pin-map"></i> Barrios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="configuraciones.html">
                        <i class="bi bi-gear"></i> Configuraciones
                    </a>
                </li>
            </ul>
            <div class="d-flex">
                <span class="navbar-text text-white me-3">
                    <i class="bi bi-person-circle"></i> Usuario
                </span>
                <button class="btn btn-outline-light">
                    <i class="bi bi-box-arrow-right"></i> Salir
                </button>
            </div>
        </div>
    </div>
</nav>