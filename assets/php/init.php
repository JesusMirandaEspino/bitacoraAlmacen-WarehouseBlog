<?php

if ( !file_exists(__DIR__ . '/config.php')
) {
    die('ERROR no existe el archivo config.php');
}

session_start();

require('config.php');
require('pages/includes/classDB.php');

setlocale(LC_TIME, SITE_TIMEZONE);
date_default_timezone_set(SITE_LANG);


require('pages/includes/postroutes.php');

$app_db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);



?>