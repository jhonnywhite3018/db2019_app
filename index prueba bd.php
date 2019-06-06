
<a href= "http://172.31.128.198/db2019/Index.php"> Antonio </a>



<?php
/*echo 'hola mundo';*/

$conn = new mysqli(
		'localhost',
		'root',
		'',
		'visitas'
);
/*echo '<pre>';
print_r($conn);
echo '</pre>';*/
$conn->query("
INSERT INTO `Visitas` (`instante`, `ip`, `detalles`) 
VALUES (now(), '".$_SERVER['REMOTE_ADDR']."', '".$_SERVER['HTTP_USER_AGENT']."');
");

/*echo '<pre>';
print_r($_SERVER);
echo '</pre>';/*
/*mayuscula sever*/
/*echo 'Eres el visitante nº'.$conn->query("SELECT COUNT(*) n FROM visitas;")->fetch_assoc()['n'];*/

echo '<br><br>Nombre:' .$conn->query("SELECT Nombre FROM visitantes WHERE ip =  '".$_SERVER['REMOTE_ADDR']."';
")->fetch_assoc()['Nombre'];

echo '<br><br>Me has visitado:' .$conn->query("SELECT count(*) n FROM visitas WHERE ip =  '".$_SERVER['REMOTE_ADDR']."';
")->fetch_assoc()['n'];

echo '<br><br>Me has visitado:' .$conn->query("SELECT ip FROM visitas GROUP BY  ip HAVING COUNT(*) = (SELECT MAX(n) m FROM (SELECT ip, COUNT(*) n FROM visitas GROUP BY ip) c1);")->fetch_assoc()['ip'];
?> 