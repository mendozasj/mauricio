<div class="row mb-4">
    <div class="col-12">
        <h1 class="display-4 text-center mb-4">
            <i class="bi bi-speedometer2"></i> Panel de Control
        </h1>
        <p class="lead text-center text-muted">
            Bienvenido al sistema de gestión integral. Seleccione una opción para comenzar.
        </p>
    </div>
</div>

<!-- Cards de acceso rápido -->
<div class="row g-4">
    <!-- Card Clientes -->
    <div class="col-md-4">
        <div class="card h-100 card-hover">
            <div class="card-body text-center">
                <i class="bi bi-people feature-icon"></i>
                <h3 class="card-title">Clientes</h3>
                <p class="card-text">
                    Gestión integral de clientes. Registro, consulta y modificación de datos de clientes.
                </p>
                <a href="index.php?seccion=clientes&accion=listar" class="btn btn-primary stretched-link">
                    <i class="bi bi-arrow-right-circle"></i> Acceder
                </a>
            </div>
        </div>
    </div>

    <!-- Card Provincias -->
    <div class="col-md-4">
        <div class="card h-100 card-hover">
            <div class="card-body text-center">
                <i class="bi bi-map feature-icon"></i>
                <h3 class="card-title">Provincias</h3>
                <p class="card-text">
                    Administración de provincias. Mantenimiento de la información geográfica.
                </p>
                <a href="index.php?seccion=provincias&accion=listar" class="btn btn-primary stretched-link">
                    <i class="bi bi-arrow-right-circle"></i> Acceder
                </a>
            </div>
        </div>
    </div>

    <!-- Card Localidades -->
    <div class="col-md-4">
        <div class="card h-100 card-hover">
            <div class="card-body text-center">
                <i class="bi bi-geo-alt feature-icon"></i>
                <h3 class="card-title">Localidades</h3>
                <p class="card-text">
                    Gestión de localidades por provincia. Organización territorial del sistema.
                </p>
                <a href="localidades.html" class="btn btn-primary stretched-link">
                    <i class="bi bi-arrow-right-circle"></i> Acceder
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Sección adicional -->
<div class="row mt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-light">
                <h3 class="mb-0">
                    <i class="bi bi-info-circle"></i> Información del sistema
                </h3>
            </div>
            <div class="card-body">
                <p>
                    Este sistema permite la gestión integral de clientes y la organización territorial
                    mediante provincias, localidades y barrios. Utilice el menú superior para acceder
                    a todas las funcionalidades disponibles.
                </p>
                <p class="mb-0">
                    Para configuraciones avanzadas del sistema, acceda a la sección de
                    <a href="configuraciones.html">Configuraciones</a>.
                </p>
            </div>
        </div>
    </div>
</div>