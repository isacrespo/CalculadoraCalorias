<?php
// Configura la salida de errores por pantalla
// error_reporting(E_ALL);
// ini_set('display_errors',1);

define('SITE_URL','http://localhost:88/calculadora_calorias');
define('SITE_LANG',['es','spa','es_ES']);

setcookie("sexo", "", time()-3600);
setcookie("edad", "", time()-3600);
setcookie("altura", "", time()-3600);
setcookie("peso", "", time()-3600);
setcookie("factor", "", time()-3600);
setcookie("envio", "", time()-3600);
