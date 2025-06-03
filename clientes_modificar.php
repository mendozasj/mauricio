<?php


if (isset($_GET['id'])) {

    if ($_GET['id'] == 0) {
        /* quiere decir que es uno nuevo
            lo que tengo que hacer es agregar y recar la pagina
            solucion más facil, menos quilombo
        */
        $sql = 'INSERT INTO clientes (cliente) values ("")';
        $resp = mysqli_query($cnn, $sql);

        $id = mysqli_insert_id($cnn);
        $ref = 'index.php?seccion=clientes&accion=modificar&id=' . $id;
        echo '<script>document.location="' . $ref . '"</script>';
    }
}



// pregunto si presionó el boton guardar
if (isset($_POST['btnGuardar'])) {
    echo '<h1>Datos guardados correctamente</h1><br>';

    $llActivo = 0;
    if (isset($_POST['activo'])) {
        $llActivo = 1;
    }


    $sql = 'update clientes set
            cliente = "' . $_POST['cliente'] . '",
            direccion = "' . $_POST['direccion'] . '",
            idprovincia = "' . $_POST['idprovincia'] . '",
            activo = "' . $llActivo . '",
            fechanac = "' . $_POST['fechanac'] . '"
            where idcliente = ' . $_POST['idcliente'];

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


$sql = 'SELECT * FROM clientes where idcliente = ' . $_GET['id'];



$resp = mysqli_query($cnn, $sql);
$campos = mysqli_fetch_array($resp);

?>

<div class="container">
    <div class="row">
        <form method="post">
            <!-- Campo ID Provincia (oculto) -->
            <div class="mb-3" hidden>
                <label for="idcliente" class="form-label">ID Provincia</label>
                <input type="text" class="form-control" id="idcliente" name="idcliente" value="<?= $campos['idcliente'] ?>">
            </div>

            <!-- Campo Cliente -->
            <div class="mb-3 col-6">
                <label for="cliente" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="cliente" name="cliente" required value="<?= $campos['cliente'] ?>">
                <div class="invalid-feedback">
                    Por favor ingrese el nombre del Cliente.
                </div>
            </div>

            <div class="mb-3 col-6">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required value="<?= $campos['direccion'] ?>">
                <div class="invalid-feedback">
                    Por favor ingrese el nombre del Cliente.
                </div>
            </div>

            <div class="mb-3 col-6">
                <label for="" class="form-label">Provincia</label>
                <?php
                echo miSelect('provincias', 'idprovincia', $campos['idprovincia']);
                ?>

            </div>

            <div class="mb-3 col-6">
                <label for="" class="form-label">Localidades</label>
                <?php
                echo miSelect('localidades', 'idlocalidad', $campos['idlocalidad']);
                ?>

            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" <?= ($campos['activo'] ? 'checked' : '') ?> value="1" name="activo" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Activo
                </label>
            </div>


            <!-- Campo de fecha (date) -->
            <div class="mb-3">
                <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento" required name="fechanac" value="<?= $campos['fechanac'] ?>">
                <div class="form-text">Selecciona tu fecha de nacimiento.</div>
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