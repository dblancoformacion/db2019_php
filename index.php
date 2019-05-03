<h1>hola mundo</h1>

Esto está escrito en HTML
y no hay saltos de línea
<br/>

<?php
/*
echo date('H:i:s');
echo '<br/>';
echo 2+5;
echo '<br/>';
$ahora=time();
$final=strtotime('2019-09-25');
$dias=($final-$ahora)/60/60/24;
echo $dias;
echo '<br/>';
echo (strtotime('2019-09-25')-time())/(
	60*60*24
);
echo '<br/>';
$nacimiento=strtotime('1982-01-04');
$hoy=time();
$edad=($hoy-$nacimiento)/60/60/24/365.25;
echo 'Tienes esta edad: '.floor($edad);
*/

// $i=$i+1    $i++   $i+=1

for($i=0;$i<=10;$i++){
	echo 'cudarado de '.$i.' = '.($i**2);
	echo '<br/>';	
}
// serie de fibonacci
$f[0]=0;
$f[1]=1;
for($i=2;$i<=10;$i++){
	$f[$i] = $f[$i-1] + $f[$i-2];
}
echo '<pre>';
print_r($f);
echo '</pre>';
// factorial de los 10 primeros naturales
$f=1;
for($i=2;$i<=10;$i++){
	$f=$f*$i;
	echo $i.'! = '.$f.'<br/>';
}

// criba de erastótenes
for($i=2;$i<=100;$i++){
	for($j=2;$j<=100;$j++){
		if(!isset($np[$i])) $np[$i*$j]=1;
	}
}
for($i=1;$i<100;$i++){
	if(!isset($np[$i])) echo $i.'<br/>';
}
/*
echo '<pre>';
print_r($np);
echo '</pre>';
*/
$alumno=[];

$alumno[]=[
	'nombre'=>'David',
	'apellido'=>'Blanco',
	'mesa'=>'700',
];
$alumno[]=[
	'nombre'=>'Roberto',
	'apellido'=>'Hernández',
	'mesa'=>'702',
];
$alumno[]=[
	'nombre'=>'María',
	'apellido'=>'Hoyos',
	'mesa'=>'704',
];

$alumno[2]['lenguajes']=[
	'HTML',
	'CSS',
];

echo '<pre>';
print_r($alumno);
echo '</pre>';

echo $alumno[1]['nombre'];

?>









