<?php
//error_reporting(0);
//ini_set('display_errors', 0);

$lnEdad = 0;

if (isset($_GET['edad'])) {
    $lnEdad = $_GET['edad'];
}


if ($lnEdad <= 18) {
    echo 'Es menor de edad';
} elseif ($lnEdad < 66) {
    echo 'Es mayor de edad';
} else {
    echo '<h1>Es de la tercera edad</h1>';
}

?>

<br>--Fin --