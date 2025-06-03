<?php


if (isset($_GET['id'])) {

    if ($_GET['id'] == 0) {
        /* quiere decir que es uno nuevo
            lo que tengo que hacer es agregar y recar la pagina
            solucion más facil, menos quilombo
        */
        $sql = 'INSERT INTO provincias (provincia) values ("")';
        $resp = mysqli_query($cnn, $sql);

        $id = mysqli_insert_id($cnn);
        $ref = 'index.php?seccion=provincias&accion=modificar&id=' . $id;
        echo '<script>document.location="' . $ref . '"</script>';
    }
}



// pregunto si presionó el boton guardar
if (isset($_POST['btnGuardar'])) {
    echo '<h1>Datos guardados correctamente</h1><br>';

    $sql = 'update provincias set
            provincia = "' . $_POST['provincia'] . '"
            where idprovincia = ' . $_POST['idprovincia'];

    //echo $sql;
    $resp = mysqli_query($cnn, $sql);

    echo '<script>
    document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            title: "¡Éxito!",
            text: "Datos guardados correctamente",
            icon: "success",
            confirmButtonText: "Aceptar"
        });
    });
    </script>';
}


$sql = 'SELECT * FROM provincias where idprovincia = ' . $_GET['id'];



$resp = mysqli_query($cnn, $sql);
$campos = mysqli_fetch_array($resp);

?>

<div class="container">
    <div class="row">
        <form method="post">
            <!-- Campo ID Provincia (oculto) -->
            <div class="mb-3" hidden>
                <label for="idProvincia" class="form-label">ID Provincia</label>
                <input type="text" class="form-control" id="idprovincia" name="idprovincia" value="<?= $campos['idprovincia'] ?>">
            </div>

            <!-- Campo Provincia -->
            <div class="mb-3 col-6">
                <label for="provincia" class="form-label">Provincia</label>
                <input type="text" class="form-control" id="provincia" name="provincia" required value="<?= $campos['provincia'] ?>">
                <div class="invalid-feedback">
                    Por favor ingrese el nombre de la provincia.
                </div>
            </div>

            <!-- Botón Guardar -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="submit" name="btnGuardar" class="btn btn-primary">
                    <i class="bi bi-save"></i> Guardar
                </button>
            </div>
        </form>
    </div>

</div>