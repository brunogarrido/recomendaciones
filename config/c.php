<?php 
$enlace =  mysql_connect('localhost', 'root', 'del121986');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
 ?>