<?php
function miSelect($lcTabla, $lcNombreCampoId, $lnValorDefecto)
{

    global $cnn;

    $lcCadena = '<select class="form-select" name="' . $lcNombreCampoId . '">
                    <option value="0" ' . ($lnValorDefecto == 0 ? "selected" : "") . '>Seleccionar una provincia </option>';

    $sql = 'select * from ' . $lcTabla . ' where !deleted ';
    $resp = mysqli_query($cnn, $sql);
    while ($camposcbo = mysqli_fetch_array($resp)) {
        $lcSeleccionado = ($camposcbo['idprovincia'] == $lnValorDefecto ? 'selected' : '');
        $lcCadena .= '<option value="' . $camposcbo['idprovincia'] . '" ' . $lcSeleccionado . '>' . $camposcbo['provincia'] . '</option>';
    }
    $lcCadena .= '</select>';

    return $lcCadena;
}

//
