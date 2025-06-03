<?php

include 'cnn.php';

include 'funciones.php';

// inicializo en vacio por cuestiones de seguridad
$lcSeccion = '';
$lcAccion = '';

if (isset($_GET['seccion'])) {
    $lcSeccion = $_GET['seccion'];
}

if (isset($_GET['accion'])) {
    $lcAccion = $_GET['accion'];
}

//armo el archivo que quiero traer.
$lcArchivo = $lcSeccion . '_' . $lcAccion . '.php';
if (!file_exists($lcArchivo)) {
    $lcArchivo = 'inicio.php';
}

//echo  $lcArchivo;
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <link rel="apple-touch-icon" href="img/logo.png">

    <title>Sistema de Gestión</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #0d6efd;
        }
    </style>
</head>

<body>

    <?php
    include 'menu.php';
    ?>
    <!-- Contenido principal -->
    <main class="container my-5">
        <?php
        include $lcArchivo;
        ?>
    </main>

    <!-- Pie de página -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="bi bi-building"></i> Sistema de Gestión</h5>
                    <p class="text-muted">
                        Plataforma integral para la administración de clientes y territorios.
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>Enlaces</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="text-white">Inicio</a></li>
                        <li><a href="clientes.html" class="text-white">Clientes</a></li>
                        <li><a href="configuraciones.html" class="text-white">Configuraciones</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled text-muted">
                        <li><i class="bi bi-envelope"></i> info@sistemagestion.com</li>
                        <li><i class="bi bi-telephone"></i> +123 456 7890</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">
                        &copy; 2023 Sistema de Gestión. Todos los derechos reservados.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Incluir SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmarEliminacion(event) {
            event.preventDefault(); // Evita que el enlace se ejecute inmediatamente
            const url = event.currentTarget.getAttribute('href');

            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url; // Redirige para eliminar si se confirma
                }
            });

            return false;
        }
    </script>


</body>

</html>