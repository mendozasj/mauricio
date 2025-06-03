<?php
if (isset($_POST['btnEnviar'])) {
    /// si existe es que presionó Enviar ... o guardar
    echo '<h1>Tento que guardar las variables que me enviaron</h1><br>';
    var_dump($_POST);
}

?>

<a href="formularios.php">Limpiar</a>
<form action="" method="post">

    <input type="text" name="miAbuelaCarmela">

    <input type="text" name="nombre">
    <br>
    <input type="text" name="direccion">
    <br>
    <input type="text" name="telefono">
    <br>
    <input type="text" name="otro">
    <br>
    <input type="text" name="algo">
    <br>
    <input type="text" name="mas">
    <br>
    <input type="text" name="nose">

    <br>
    <input type="date" name="miVarCumple">
    <br>
    <input type="text" name="miEmail" id="">
    <br>
    <input type="submit" name="btnEnviar" value="Enviar">

</form>