Hola mundo
Esto esta escrito en HTML
y no hay saltos de linea 
echo date ('H:i:s');
<?php
/*echo date ('H:i:s');
echo ' <br/>';
echo ' <br/>';
echo 2 + 5;
$ahora=time();
$final =strtotime('2019/09/25');
$dias = ($final - $ahora)/60/60/24;
echo ' <br/>';
echo $dias;
echo ' <br/>';
echo (strtotime ('2019/09/25') -time())/(60*60*24);
echo ' <br/>';
$nacimiento= strtotime ('1975/01/17');
$edad =(-$nacimiento + $ahora)/(60*60*24*30*12);
echo round($edad,1);
*/

// $i = $is + 1 $i++ $ $i+=1
/*for($i=0; $i<10;$i++)
{
	echo ' <br/>';	
	echo $i;
}*/
/* $potencia = 1;
for($i=0; $i<15;$i++)
{
	echo ' <br/>';	
	/*echo 2 * $i;*/
	/*echo $potencia = $potencia*2;
	echo $i*$i;
}*/
echo ' <br/>';
// Fibonacci
/*$f[0]=0;
$f[1]=1;
for($i=2; $i<11;$i++)
{
	$f[$i] = $f[$i-1] +  $f[$i-2];
	echo ' <br/>';	
}
echo '<pre>';
print_r($f);
echo '<pre>';*/
//  Factorial
/*$f[0]=1;
$f[1]=1;
for($i=2; $i<11;$i++)
{
	$f[$i] = $f[$i-1]*$i;
	echo ' <br/>';	
}
echo '<pre>';
print_r($f);
echo '<pre>';*/
//criba de erastótenes
/*for ($j=1;j<=100;$j++)
{
	for($i=2;$i<=100; $j++)
	{
		if(!isset($np[$i])) $np[$i*$j]=1;
 				
	}
}*/
$alumno=[];
$alumno[]=[
		'nombre'=> 'David',
		'apellido' => 'Blanco',
		'mesa' => '700',
		];
$alumno[]=[
		'nombre'=> 'Roberto',
		'apellido' => 'Hernandez',
		'mesa' => '704',
		];	
$alumno[]=[
		'nombre'=> 'Maria',
		'apellido' => 'Hoyos',
		'mesa' => '704',
		];	
$alumno[2]['lenguajes']=[
		'HTML',
		'CSS',
];
echo '<pre>';
print_r($alumno);
echo '<pre>';
echo ' <br/>';
echo $alumno[1]['nombre'];
?>