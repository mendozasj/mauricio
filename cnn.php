<?php
// config.php
/*
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'bdinstituto');
*/
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bdinstituto';

/*

$host = '192.185.194.19';
$user = 'i20com_usuario_usuario';
$pass = 'Isp203040';
$db = 'i20com_borrar_borrar';

*/



$cnn = mysqli_connect($host, $user, $pass, $db);

if (!$cnn) {
	die('Error de conexión: ' . mysqli_connect_error());
}

// Versión corregida con utf8mb4 y manejo de errores
if (!mysqli_set_charset($cnn, 'utf8mb4')) {
	die('Error al establecer charset utf8mb4: ' . mysqli_error($cnn));
	//} else {
	//	echo "Anda todo de die!!!!";
}
