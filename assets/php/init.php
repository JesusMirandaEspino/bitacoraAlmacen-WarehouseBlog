<?php

if ( !file_exists(__DIR__ . '/config.php')
) {
    die('ERROR no existe el archivo config.php');
}

session_start();

require('config.php');

setlocale(LC_TIME, SITE_TIMEZONE);
date_default_timezone_set(SITE_LANG);

$app_db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);
if ($app_db === false) {
    die('Error fatal no se conecto a la base de datos');
}



?>