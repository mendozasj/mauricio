<?php
// si recibo un eliminarid es que me mandaron uno para borrar

if (isset($_GET['ideliminar'])) {


    //existo... tengo que borrar algo
    //$sql = 'delete from provincias where idprovincia = '.$_GET['eliminarid'];
    $sql = 'update clientes set deleted = 1 where idcliente = ' . $_GET['ideliminar'];
    //echo $sql;
    $resp = mysqli_query($cnn, $sql);
}

?>

<div class="row mb-5 p-3 bg-light">
    <div class="col-10">
        <h4>Clientes listar</h4>
    </div>
    <div class="col-2">
        <a href="index.php?seccion=clientes&accion=modificar&id=0" class="btn btn-light"><i class="fas fa-plus me-1"></i> Nueva
        </a>
    </div>

</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Cliente</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = 'select * from clientes where !deleted';
        $resp = mysqli_query($cnn, $sql);

        while ($campos = mysqli_fetch_array($resp)) {
        ?>

            <tr>
                <td><?= $campos['idcliente']; ?></td>
                <td><?= $campos['cliente']; ?></td>
                <td>

                    <a href="index.php?seccion=clientes&accion=modificar&id=<?= $campos['idcliente'] ?>"
                        class="btn btn-light">
                        <i class="fas fa-edit me-1"></i>
                    </a>

                    <a href="index.php?seccion=clientes&accion=listar&ideliminar=<?= $campos['idcliente'] ?>"
                        class="btn btn-light "
                        onclick="return confirmarEliminacion(event)">
                        <i class="fas fa-trash-alt me-1"></i>
                    </a>

                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>