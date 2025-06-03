<?php
if (isset($_GET['btnEnviar'])) {
    /// si existe es que presionó Enviar ... o guardar
    echo '<h1>Tento que guardar las variables que me enviaron</h1><br>';
}

?>

<a href="formularios.php">Limpiar</a>
<form action="" method="get">

    <input type="text" name="miAbuelaCarmela">
    <br>
    <input type="date" name="miVarCumple">
    <br>
    <input type="email" name="miEmail" id="">
    <br>
    <input type="submit" name="btnEnviar" value="Enviar">

</form>