<?php

class SerVivo{
    public function respirar()
    {
        echo "estoy respirando";
    }
}

class Humano extends SerVivo{
    public function razonan(){
        echo "estoy razonando";
    }
}

$objeto = new Humano();
$objeto->respirar();

#Cosas que estamos cumpliendo:
#Abstracción: nuevos tipos de datos, el que tu quieras, tu lo creas(otro automovil)
#Encapsulmiento: organizar el código en grupos lógicos, una primera capsula que es la clase y otra el objeto
#ocultaminto: oculta detalles de implementación y exponer solo los detalles que sean necesarios para el resto del sistema
/*

*/



/*

------------------------------------EJERCICIOS ARRAYS--------------------------------------

EJERCICIO 0.01: Modulo(el residuo de una división)
$num1 = 10;
$num2= 6;

$resultado = $num1 % $num2;
echo $resultado;

EJERCICIO 0.02: Explicación de operador aritmetico 

$num1 = 1
0;
$num2= 6;

$num1 = $num1 + 19;
echo $num1;

EJERCICIO 0.03: Usando operador aritmetico +=

$num1 = 10;
$num2= 6;

$num1 += 1;
echo $num1;

EJERCICIO 0.04: Usando operador aritmetico -=

$num1 = 10;
$num2= 6;

$num1 -= 1;
echo $num1;

EJERCICIO 0.05: Usando operador aritmetico *=

$num1 = 10;
$num2= 6;

$num1 *= 3;
echo $num1;

EJERCICIO 0.06: Usando operador aritmetico /=

$num1 = 10;
$num2= 6;

$num1 /= 3;
echo $num1;

Ejercicio 0.07: utilizar operador === 
$num1 = '10';
if ($num1 === 10) {
    echo "Es IDENTICO";
} else {
    echo "Es DIFERENTE";
}

Ejercicio 0.08: otro ejercicio utilizando el operador === 
$num1 = 'true';
if ($num1 === true) {
    echo "Es IDENTICO";
} else {
    echo "Es DIFERENTE";
}

Ejercicio 0.09: EXPLICACIÓN TRAMPA de operador el operador de INCREMENTENTO / DECREMENTO
$num1 = 10;
echo $num1++ . "<br>";
echo $num1;

Ejercicio 0.010: Una constante con un array dentro
define('nombres', ['Ric','kellly','Neil']);
echo nombres[2];

Ejercicio 0.011: Imprimir exponencialmente
$x = 2;
$y = 4;
echo $x ** $y;

Ejercicio 0.012: operador "no es identico"
$x = 100;  
$y = "100";
var_dump($x !== $y);

Ejercicio 0.012: operador "no es igual", retorna falso porque los valores no son iguales
$x = 100;  
$y = "100";
var_dump($x != $y);


Ejercicio 0.013: operador "igual en dato y tipo de dato", retorna falso porque los valores son iguales pero no son el mismo tipo de dato
$x = 100;  
$y = "100";

var_dump($x === $y);

Ejercicio 0.014: concatena un valor usando el operador .=
 $txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;




EJERCICIO 0.1: imprime un array
$fruta = array('pera','uva','manzana','melon','sandia','durazno','guayaba','naranja','mandarina');
print_r($fruta);


EJERCICIO 0.2: imprime un array con <pre></pre>
$fruta = array('pera','uva','manzana','melon','sandia','durazno','guayaba','naranja','mandarina');
echo '<pre>';
print_r($fruta);
echo '</pre>';

EJERCICIO 0.3: agrega un valor al array con array_push($array,"cosa");
 $fruta = array('pera','uva','manzana','melon','sandia','durazno','guayaba','naranja','mandarina');
array_push($fruta,"tuna");
echo '<pre>';
print_r($fruta);
echo '</pre>';

EJERCICIO 0.4: agrega un valor al array con array_push($array,"cosa");
 $fruta = array('pera','uva','manzana','melon','sandia','durazno','guayaba','naranja','mandarina');
unset($fruta[1]);
echo '<pre>';
print_r($fruta);
echo '</pre>';

EJERCICIO 0.5: Imprimir un arreglo asociativo

$estudiante = array(
    "Nombre" => "Ulises",
    "Apellido" => "Perez",
    "País" => "México",
    "Edad" => 35
);
echo '<pre>';
print_r($estudiante);
echo '</pre>';

EJERCICIO 0.4: Concatena tu nombre con un arreglo asociativo
$estudiante = array(
    "Nombre" => "Ulises",
    "Apellido" => "Perez",
    "País" => "México",
    "Edad" => 35
);
echo $estudiante['Nombre']. " " . $estudiante['Apellido'];

EJERCICIO 0.5: Otra manera de agregar datos a un array
$dias = array('lun','mar','mier');
$dias[3] = 'jueves';
echo "<pre>";
print_r($dias);
echo "</pre>";

EJERCICIO 0.6: Otra manera de escribir un arreglo.
$dias = ['lun','mar','miier'];
echo '<pre>';
print_r($dias);
echo '</pre>';

Ejercicio 0.7: cambiar el valor de un arreglo
$dias = ['lun','mar','miier'];
$dias[2] = "Miércoles";
echo '<pre>';
print_r($dias);
echo '</pre>';

Ejercicio 0.8: cambiar el valor de un array asociativo
$estudiante = ['nombre' =>'luis','pais'=>'marruecos','edad'=>'17'];
$estudiante['pais'] = "México";
echo '<pre>';
print_r($estudiante);
echo '</pre>';

Ejercicio 0.9: hacer un arreglo multidimensional de amigos con sus datos
$arreglo = [['perro','gato','pez'],['Pera','Piña','Fresa'],['Luis','Fernando','Angel']];
echo $arreglo[1][2];

Ejercicio 0.91: contar espacios de un array multidimensional
$arreglo = [['perro','gato','pez'],['Pera','Piña','Fresa'],['Luis','Fernando']];
echo count($arreglo[2]);

------------------------------------------------------EJERCICIOS FOR-----------------------------------------

Ejercicio 1: FOR que imprima el cuadrado de un número, del 1 a l30
for ($i=0; $i < 31; $i++) { 
    echo "El cuadrado de".$i. " un número es: ".($i*$i). "<br>";
}

Ejercicio 1.1: Haz un bucle for que imprima los números del 33-10
for ($i=33; $i >10 ; $i--) { 
    echo $i. "<br>";
}

Ejercicio 1.11: Recorre un arreglo INDEXADO
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

Ejercicio 1.12: Imprime el factorial usando FOR
$factorial = 1;
$num = 12;

for ($cont=1; $cont <$num ; $cont++) { 
    $factorial *= $cont;
}

echo "el factorial de ". $num. " es:" . $factorial;



Ejercicio 1.2: imprime los datos del array utilizando foreach
$frutas = array('pera','uva','manzana','melon','sandia','durazno','guayaba','naranja','mandarina');
foreach ($frutas as $fruta) {
    echo $fruta. "<br>";
}


Ejercicio 1.21: Imprime los valores completo de un array asociativo usando forEach
$personas = ['lalo'=>35,"ruben"=>34,"gemelo"=>33];
foreach ($personas as $persona => $value) {
    echo $persona." tiene ".$value." años<br>";
}


Ejercicio 1.22: Imprime un array asociativo con sus valores
$personas = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($personas as $persona => $edad) {
  echo "Key=" . $x . ", Value=" . $edad;
  echo "<br>";
}

Ejercicio 1.23: Imprime una lista de autos guardada en un array multidimensional, cada array debe de tener autos de la misma marca y cuando comience una marca distinta
imprimir que marca de autos son.

$cars = [
    ["Altima","Armasa","March"],
    ["Lobo","Expedition","Fiesta"],
    ["Civic","City","Acord"]
];
$companies = ["Nissan","Ford","Honda"];

echo "<ol>";
for ($i=0; $i < count($companies) ; $i++) { 
    echo "<h2>". $companies[$i]. "</h2>";
    for ($j=0; $j < count($cars[$i]); $j++) { 
        if ($j< count($cars[$i])) {
            echo "<li>".$cars[$i][$j]."</li>";
        }else {
            break;
        }
        
    }
        
}
echo "</ol>";

TIPS
-Primero imprimir el número de veces que haya cosas en el array multidimensional
-Lueego imprimir todos los valores que tenga  adentro el array multidimensional
-intentar ponerle una condición



Ejercicio 1.3: imprimir en una lista de HTML los meses del año que están dentro un array.
$meses = ['enero',"febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
echo "<ul>";
foreach ($meses as $mes) {
        echo "<li>$mes</li>";
}
echo"</ul>";

Ejercicio 1.4: imprimir en una lista de HTML y en orden alfabetico los meses del año que están dentro un array.
$meses = ['enero',"febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
sort($meses);
echo "<ul>";
foreach ($meses as $mes) {
        echo "<li>$mes</li>";
}
echo"</ul>";

jercicio 1.5: imprimir en una lista de HTML y en orden alfabetico pero inverso, comenzando por Z los meses del año que están dentro un array.
$meses = ['enero',"febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
rsort($meses);
echo "<ul>";
foreach ($meses as $mes) {
        echo "<li>$mes</li>";
}
echo"</ul>";

ejercicio 1.6: ordenar array de número de mayor a menor y menor a mayor.
$numeros = [1,22,44,55,65,34,23];
//sort($numeros);
rsort($numeros);
foreach ($numeros as $numero) {
    echo $numero."<br>";
}
-----------------------------------------------EJERCICIOS IF-ELSE ------------------------------------------
Ejercici2: decir si un número es par o inpar

for ($i=0; $i < 31; $i++) { 
    if ($i %2 ==0) {
        echo "El número".$i." es par<br>";
    }else {
        echo "El número".$i." es inpar<br>";
    }
}

EJERCICIO 2.01: NO ES UNA CONDICIÓN, esta preguntado "si hay un valor llamado X":
$verdadero = true;
if ($verdadero) {
    echo "Es verdadero";
} else {
    echo "Es falso";
}



Ejercicio2.1 
$numero=6;
if ($numero != 20) {
    echo 'el numero NO ES 20';
} else {
    echo 'El número es IGUAL a 20';
}

Ejercicio 2.2: Imprime si eres mayor de edad


$edad =27;
if ($edad <18) {
    echo "Estas morro";
} else {
    echo "Ya estas eludo y alcanzas el timbre";
}

Ejercicio 2.3: Usar el "operador" de negación en un if

$edad = 17;
if (!$edad) {
    echo "No existe la variable edad";
} else {
    echo "La variable edad tiene un valor de $edad";
}

Ejercicio 2.4: Usar el operador && para que pida que se cumplan 2 condiciones para entrar al antro
$edad = 17;
if ($edad >18 && $edad < 30) {
    echo "Puedes pasar al antro";
} else {
    echo "Eres muy joven para entrar al antro";
}

Ejercicio 2.5: Usar el operador && para que pida que se cumplan 2 condiciones para entrar al antro
y que imprima si es muy viejo, muy joven y que puede entrar

Ejercicio 2.6: utilizar && y OR, que imprima lo siguiente:
-si eres mayor de 18 y menor de 30 puedes pasar
-si eres menor de 18, no puedes pasar$verdadero = true;
if ($verdadero) {
    echo "Es verdadero";
} else {
    echo "Es falso";
}


-si ere mayor de 30, puedes pasar si traes mujer o eres guapo, si no, no puedes pasar

$edad = 34;
$guapo= true;
$dinero = 20000;

if ($edad >18 && $edad < 30) {
    echo "Puedes pasar al antro";
} elseif ($edad < 18) {
    echo "Eres menor de edad, no puedes entrar al antro";
}elseif($edad>30){
    if ($guapo or $mujer) {
        echo "Puede pasar DON";
    } else {
        echo "Es muy viejo, espanta a la clientela";
    }
}

Ejercicio 2.7: Usando el operador != para que no lo dejen entrar si no es coreano
$edad = 24;
$guapo= true;
$nacionalidad = "coreana";

if ($nacionalidad != "coreana") {
    echo "No se admiten extranjeros";
}else{
    if ($edad >18 && $edad < 30) {
        echo "Puedes pasar al antro";
    } elseif ($edad < 18) {
        echo "Eres menor de edad, no puedes entrar al antro";
    }elseif($edad>30){
        if ($guapo or $mujer) {
            echo "Puede pasar DON";
        } else {
            echo "Es muy viejo, espanta a la clientela";
        }
    }
}

Ejercicio 2.8 SHORT IF
$txt1 = 2;
$txt2 = 3;

echo ($txt1 == $txt2)? "son iguales" : "Son diferentes";


--------------------------------------EJERCICIOS CON IF-ELSE y FOR-----------------------------------------------------

Ejercicio 3(inventado por mi); con FOR hacer un bucle que imprima el cuadrado de los números del 1-30 y que te digan si es par o inpar
for ($i=0; $i < 31; $i++) { 
    if ($i %2 == 0) {
        echo "El cuadrado de ".$i. " es: ".($i*$i). " y es un número par<br>";
    } else {
        echo "El cuadrado de ".$i. " es: ".($i*$i). " y es un número inpar<br>";
    }
}






Ejercicio 3.1: imprimir números del 1-50 y cuando el bucle llegue al número 5, "imprimir soy el número 5" y que siga con el bucle
for ($i=1; $i <= 50; $i++) {    
    if ($i==5) {
        echo "Soy el número ";
    }
    echo $i. "<br>";
}

Ejercicio 3.2: imprimir números del 1-50 y cuando el bucle llegue al número 5, "imprimir soy el número 5" y que se detenga en el número 5.
for ($i=1; $i <= 50; $i++) {    
    if ($i==5) {
        echo "Soy el número";
        break; //continue ó exit
    }
    echo $i. "<br>";
}


-----------------------------------------------EJERCICIOS CON WHILE----------------------------------------------

Ejercicio 4: Usando WHILE imprime los números d el 1-20 de 2 en 2 u, 
$a=0;
while ($a <= 20) {
    echo $a." <br>";
    $a= $a +2; 
}

Ejercicio 5: Lo mismo de arriba pero usando +=
$a=0;
while ($a <= 20) {
    echo $a." <br>";
    $a+=2; 
}

Ejercicio 6: DO WHILE
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);


-------------------------------------------EJERCICIOS WHILE CON OTRA FUNCIÓN-------------------------------------

EJERCICIO 5.1: recorre el array con while usando la función count para saber los
$frutas = array('pera','uva','manzana','melon','sandia','durazno','guayaba','naranja','mandarina');
//count($frutas);
$i =0;
while ($i <= count($frutas)) {
    echo $frutas[$i]. "<br>";
    $i++;
}

---------------------------------------------EJERCICIOS CON GET-------------------------------------------------

Ejercicio 6(yo lo cree): Explica como se usa la variable global GET
Escribir en la url: http://localhost/cursoPhp/ejerciciosVarios/index.php?uno=hola&dos=2&tres=true;
var_dump($_GET);

Ejercicio 7(yo lo cree): Agregarle contenido a la variable global $_GET y mostrarlo
http://localhost/cursoPhp/ejerciciosVarios/index.php?lol=sabroso
echo $_GET['lol'];

Ejercicio 7.1: Imprimir las tablas de multiplicar usando para pasar el dato, la variable $_GET
$a=$_GET['numero'];//een eel corchete va el nombre que registrare en la url
for ($i=1; $i <=10 ; $i++) { 
    echo $a." x ".$i." = ".($a*$i)."<br>";
}

-------------------------------------EJERCICIOS GET & IF-ELSE -------------------------------------------

Ejercicio 7.2: Usando la variable global GET imprime el dato solo si es un número
$numero = $_GET['numero'];
if(isset($numero) && is_numeric($numero)){
    echo "El número es: ". $numero;
} else {
    echo "No es un número";
}

----------------------------------EJERCICIOS ERRORES PHP-----------------
8) error de sintaxis(falta ;)
echo "hola"
echo "ulises";

tipo de error: Parse error
Mensaje de error: syntax error, unexpected 'echo' (T_ECHO), expecting ';' or ','
contexto(donde esta el error): /opt/lampp/htdocs/cursoPhp/ejerciciosVarios/index.php on line 3


8.1)fatal error: excepciones no detectadas, cuando ocurrer este error, detiene la ejecución completamente
soyUnaFunción();
echo "hola";

tipo de error: Fatal error: 
Mensaje de error: Uncaught Error: Call to undefined function soyUnaFunción() in /opt/lampp/htdocs/cursoPhp/ejerciciosVarios/index.php:2 Stack trace: #0 {main} thrown 
contexto(donde esta el error): /opt/lampp/htdocs/cursoPhp/ejerciciosVarios/index.php on line 2

8.2)Warning(manda una advertencia y no detiene la ejecución)
200/0;
echo "hola";200/0;
echo "hola";

tipo de error: Warning
Mensaje de error: Division by zero 
contexto(donde esta el error):/opt/lampp/htdocs/cursoPhp/ejerciciosVarios/index.php on line 2



8.3)noticed: Aviso en tiempo de ejecución o notas de sugerencia
result;
echo "Resultado es:". $result;
echo 'llegue al final del programa';


Tipo de error: Notice
Mensaje de error:Undefined variable: result
contexto(donde esta el error): /opt/lampp/htdocs/cursoPhp/ejerciciosVarios/index.php on line 3

8.4) Crear mi propio mensaje de error
trigger_error('Este es el mensaje de error',E_USER_ERROR);//esta en la lista y es un mensaje de aviso al usuario


---------------------------------------EJERCICIOS FUNCIONES PHP PARA TEXTO--------------------------------------------------------
Ejercicio 9: imprimir cuantos caracteres tiene una cadena de texto.
$saludo = "Hola mi nombre es Ric";
$saludo2= str_replace(' ','',$saludo);
echo strlen($saludo2);

Ejercicio 9.1: imprimir el texto en mayúsculas
saludo = "Hola mi nombre es Ric";
echo strtoupper($saludo);

Ejercicio 9.2: imprimir texto en minúsculas
$saludo = "MEXICO";
echo strtolower($saludo);

---------------------------------------EJERCICIOS FUNCIONES PHP PARA NÚMEROS--------------------------------------------------------

Ejercicio 9.3: que te diga si el número es entero o no(si tiene punto decimal, es float)
$x = 5985;
var_dump(is_int($x));
echo "<br>";
$x = 59.85;
var_dump(is_int($x));

Ejercicio 9.31: que te diga si el número es decimal ó flotant
$x = 10.365;
var_dump(is_float($x));

EJERCICIO 9.32: Usa la función is_numeric() para saber si la variable es un número
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));


EJERCICIO 9.33: Convierte el tipo de dato a entero utilizando la función intval() o (int) ó (integer)

$x = 23465.768;
$int_cast = intval($x);
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = intval($x);
echo $int_cast;

EJERCICIO 9.34: Imprime el valor de PI con una función
echo(pi());

EJERCICIO 9.35: Imprime el número menor
echo(min(0, 150, 30, 20, -8, -200, -300));

EJERCICIO 9.36: Imprime el número menor de un array usando la función "min()"
echo(min([0, 150, 30, 20, -8, -200, -300]));

EJERCICIO 9.37: Imprime el número menor
echo(max(0, 150, 30, 20, -8, -200, -300));

EJERCICIO 9.38: Imprime el número menor de un array usando la función "max()"
echo(max([0, 150, 30, 20, -8, -200, -300]));

Ejercicio 9.39: Imprime el número absoluto(osea lo pasa a POSITIVO)
echo(abs(-6.7));

Ejercicio 9.4: Imprime la raiz cuadrada
echo(sqrt(64));

Ejercicio 9.41: Redondea el número hacia abajo o hacia arriba según este más cerca
echo(round(1.49));

Ejercicio 9.42: Gnera un número aleatorio
echo(rand());

Ejercicio 9.42: Gnera un número aleatorio de X número a Y número.
echo(rand(10,100));

Ejercicio 9.43: Geenera el resultado de un número a la potencia que tu le digas.
echo pow(2,4);



--------------------------------------EJERCICIOS FUNCIONES PHP PARA ARRAYS----------------------------------------------
Ejercicio 9.6: ordena una matriz asociativa en orden ascendente, según el VALOR

$personas = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($personas);

foreach ($personas as $persona => $edad) {
    echo "Mi nombre es ".$persona. " y tengo ".$edad. " años <br>";
}

Ejercicio9.61: ordena una matriz asociativa en orden ascendente, según el KEY(la letra con la que comienza el nombre)
$personas = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($personas);

foreach ($personas as $persona => $edad) {
    echo "Mi nombre es ".$persona. " y tengo ".$edad. " años <br>";
}

Ejercicio 9.62: ordena una matriz asociativa en orden "descendente", según el VALOR
$personas = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($personas);

foreach ($personas as $persona => $edad) {
    echo "Mi nombre es ".$persona. " y tengo ".$edad. " años <br>";
}


Ejercicio 9.63: ordena una matriz asociativa en orden "descendente", según el KEY(la letra con la que comienza el nombre)
$personas = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($personas);

foreach ($personas as $persona => $edad) {
    echo "Mi nombre es ".$persona. " y tengo ".$edad. " años <br>";
}


--------------------------------------EJERCICIOS CONSTANTES----------------------------------------------
constants predefinidas: https://www.php.net/manual/es/language.constants.predefined.php#:~:text=Constantes%20predefinidas%20%C2%B6,o%20porque%20han%20sido%20compiladas.


Ejercicio 10: Imprimir una constante
define('Saludo',"Hola, ¿Cómo estas?!");
echo Saludo;

Ejercicio 10.1: imprimir una constante con minúscula y que este repetida.(Con true te imprime LA SEGUNDA constante)
define('HOLA', 'Hello',true);
define('HOLA', 'Ni hao');

echo HELLO;

Ejercicio 10.2: imprimir una constante con minúscula usando TRUE.
define('HOLA', 'Hello',true);
define('HOLA', 'Ni hao');

echo hello;

Ejercicio 10.3: Imprimir constantes PREDEFINIDAS
echo "Constante prefedinda FILE: ". __FILE__ ."<br>";
echo "Constante prefedinda LINE: ". __LINE__ ."<br>";
echo "Constante prefedinda DIR: ". __DIR__ ."<br>";




--------------------------------------EJERCICIOS SWITCH----------------------------------------------

Ejercicio 11: Ejercicio Switch-case-default 
$mes = "Enero";

switch ($mes) {
    case 'Diciembre':
        echo "feliz navidad";
        break;
    case 'Enero';
        echo "Feliz año nuevo";
        break;
    default:
        echo "No se que més es ese";
        break;
    }

--------------------------------------EJERCICIOS FUNCIONES----------------------------------------------


Ejercicio 12: Explicación del SCOPE de una variable.
$x = 5; 

function myTest() {
  
  echo "<p>Variable x inside function is: $x </p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";



Ejercicio 12.01: Utilizando la keyword "global" variables globales en una función con scope global

$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y



Ejercicio 12.02: Lo mismo de arriba pero utilizando un array global
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo $y;

Ejercicio12.03: usar la keyword para mantener el valor de la variable
function myTest() {
    static $x = 0;
    echo $x ."<br>";
    $x++;
  }

  
  myTest();
  myTest();
  myTest();

Ejercicio 12.04: funciones modo estricto sin declare(strict_types=1);
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "4 days");

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");


Ejercicio 12.05: funciones modo estricto CON declare(strict_types=1);, mostrarle que marca error
declare(strict_types=1);
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");


Ejercicio 12.05: funciones modo estricto CON declare(strict_types=1);, ya bien hecho
declare(strict_types=1);
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, 5);


Ejercicio 12.06: argumentos por default en una función
declare(strict_types=1);
function addNumbers(int $a, int $b = 5) {
  return $a + $b;
}
echo addNumbers(5);


Ejercicio 12:07: Usando return en una función
declare(strict_types=1); // strict requirement
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);


Ejercicio 12.08: pedir datos en un tipo de dato específico y devolverlos en un tipo de dato específico
declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b): float {
  return $a + $b;
}
echo addNumbers(1.3, 5.8);


Ejerciciio 12.09
Puede especificar un tipo de devolución diferente a los tipos de argumento, pero asegúrese de que la devolución sea del tipo correcto:
declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);




--------------------------------------EJERCICIOS CON OBJETOS----------------------------------------------
EJERCICIO 13.01: Crear mi primer objeto e imprimir una PROPIEDAD.
class Car {
    public $color="red";
}
$myCar = new Car();
echo $myCar -> color;

EJERCICIO 13.02: Crear un objeto, imprime una "propiedad" y concatenando texto.
class Car {
    public $color="red";
}
$myCar = new Car();
echo $myCar -> color . " ferrari";

Ejercicio 13.03: Crear un objeto, y concatenar 2 "propiedades 
class Car {
    public $color="red";
    public $model=" Toyota";
}
$myCar = new Car();
echo $myCar -> color . $myCar -> model;


Ejerxixio 13.04: Crear un objeto e imprimir las propiedades utilizando un "metodo" y apuntando a las propiedades usando el referenciador "$this"
class Car {
    public $color="red";
    public $model=" Toyota";

    public function imprimir()
    {
        echo "Tengo un ". $this->model . " de color ". $this->color;
    }
}
$myCar = new Car();
echo $myCar->imprimir();


Ejercicio 13.05: cambiar el color y el modelo sin modificar nada dentro de la clase
class Car {
    public $color;
    public $model;

    public function imprimir()
    {
        echo "Tengo un ". $this->model . " de color ". $this->color;
    }
}
$myCar = new Car();
$myCar->color="blue";
$myCar->model="ford";
echo $myCar->imprimir();


Ejercicio 13.06:Agregar una "propiedad" que no exista dentro de la clase y agregarla al metodo
class Car {
    public $color;
    public $model;

    public function imprimir()
    {
        echo "Tengo un ". $this->model . " de color ". $this->color . " y mis llantas son ". $this->llantas;
    }
}
$myCar = new Car();
$myCar->color="blue";
$myCar->model="ford";
$myCar->llantas="Pirelli";
echo $myCar->imprimir();


Ejercicio 13.07: Usar return enlugar del echo dentro del metodo e imprimirlo
class Car {
    public $color;
    public $model;

    public function imprimir()
    {
        return "Tengo un ". $this->model . " de color ". $this->color . " y mis llantas son ". $this->llantas;
    }
}
$myCar = new Car();
$myCar->color="blue";
$myCar->model="ford";
$myCar->llantas="Pirelli";
$factorial = 1;
$num = 12;

for ($cont=1; $cont <$num ; $cont++) { 
    $factorial *= $cont;
}

echo "el factorial de ". $num. " es:" . $factorial;

echo $myCar->imprimir();


Ejercicio 13.08: imprimir 2 objetos
class Car {
    public $color="rojo";
    public $model="Sentra";

    public function imprimir()
    {
        return "Tengo un ". $this->model . " de color ". $this->color . " y mis llantas son ". $this->llantas;
    }
}
$myCar = new Car();
$myCar->color="blue";
$myCar->model="ford";
$myCar->llantas="Pirelli";
echo $myCar->imprimir();

$miAuto = new Car();
$miAuto->llantas="Dodge";
echo "<br>";
echo $miAuto->imprimir();


Ejercicio 13.09: Utilizar el metodo mágico constructor  para modificar los datos de las propiedades
class Car {
    public $color="rojo";
    public $model="Sentra";

    public function __construct($color,$model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function imprimir()
    {
        return "Tengo un ". $this->model . " de color ". $this->color . " y mis llantas son ". $this->llantas;
    }
}
$myCar = new Car("blue","ford");
$myCar->llantas = "Pirelli";
echo $myCar->imprimir();



EJERCICIO 13.10: crear 2 objetos usando el metoo mágixo xonstructor

class Car {
    public $color="rojo";
    public $model="Sentra";

    public function __construct($color,$model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function imprimir()
    {
        return "Tengo un ". $this->model . " de color ". $this->color . " y mis llantas son ". $this->llantas;
    }
}
$myCar = new Car("blue","ford");
$myCar->llantas = "Pirelli";
echo $myCar->imprimir();

$miAuto = new Car("verde","Ibiza");
$miAuto->llantas = "Bridgeton";
echo $miAuto->imprimir();


EJERCICIO 13.11: crear un objeto de otra manera.
$auto1 = (object)["marca"=>"Toyota","modelo"=>"Corolla"];
var_dump($auto1);

Ejercicio 13.12: Crear un objeto con código spaguetti(imperativo)
$auto1 = (object)["marca"=>"Toyota","modelo"=>"Corolla"];
$auto2 = (object)["marca"=>"Hyundai","modelo"=>"Accent Vision"];

function mostrar($auto){
    echo "<p>Hola! sou un $auto->marca, modelo $auto->modelo</p>";
}
var_dump($auto1);
mostrar($auto1);
mostrar($auto2);

Ejercicio 13.13: Explicar anstracción, ocultamiento, encapsulamiento
class auto{
    public $marca;
    public $modelo;

    function ejecutar(){
        echo "Mi auto es un $this->marca modelo $this->modelo";
    }
}

$car1 = new auto();
$car1->marca="Nissan";
$car1->modelo="Sentra";
$car1->ejecutar();


$car2 = new auto();
$car2->marca="Volswagen";
$car2->modelo="Jetta";
$car2->ejecutar();

#Cosas que estamos cumpliendo:
#Abstracción: nuevos tipos de datos, el que tu quieras, tu lo creas(otro automovil)
#Encapsulmiento: organizar el código en grupos lógicos, una primera capsula que es la clase y otra el objeto
#ocultaminto: oculta detalles de implementación y exponer solo los detalles que sean necesarios para el resto del sistema

Ejercicio 13.14: Imprimir hola mundo usando un metodo mágico dentro de una clase.
class Persona{
    public function __construct()
    {
     echo "Hola mundo";   
    }
}
$fulano = new Persona("Hello world");


Ejercicio 13.15: Imrpimir un hola mundo con un objeto con un metodo mágico, pasando el valor por el objeto


class Persona{
    public function __construct($texto)
    {
     echo $texto;   
    }
}
$fulano = new Persona("Hello world");


Ejercicio 13.16: Pasarle 2 valores.
class Persona{
    public function __construct($texto,$num)
    {
     echo $texto,$num;   
    }
}
$fulano = new Persona("Hello world",2);


Ejercicio 13.16: Pasarle 2 valores exiguiendo tipos de datos
class Persona{
    public function __construct(string $texto,array $num)
    {
    $datos = var_dump($num);
     echo $texto."<br>". $datos;   
    }
}

$cadena = [1,2,3];

$fulano = new Persona("Hello world",[1,2,3]);



Ejercicio 13.17: Imprimir una propiedad privada
class Persona{

    private $nombre = "Ric";

    public function __construct($texto)
    {
    
     echo $texto."<br>";   
    }

    public function imprimir()
    {
        echo $this->nombre;
    }
}

$fulano = new Persona("Hello world");
$fulano->imprimir();

Ejercicio 13.18: Cambiar y mostrar una propiedad privada

class Persona{

    private $nombre = "Ric";

    public function __construct($texto)
    {
    
     echo $texto."<br>";   
    }

    public function imprimir()
    {
        echo $this->nombre;
        $this->nombre = "<br>Uli";
        echo $this->nombre;
    }
}

$fulano = new Persona("Hello world");
$fulano->imprimir();


Ejercicio 13.19:Modifica la propiedad privada pasando el valor por el metodo

class Persona{

    private $nombre = "Ric";

    public function __construct($texto)
    {
    
     echo $texto."<br>";   
    }

    public function imprimir($info)
    {
        echo $this->nombre;
        $this->nombre = $info;
        echo $this->nombre;
    }
}

$fulano = new Persona("Hello world");
$fulano->imprimir("Mimo Chon");


Ejercicio 13.20:ejecutar un metodo de un objeto, que contenga la ejecución de un metodo que modifique el valor de una propiedad privada y que muestre el valor
class Persona{

    private $nombre = "Ric";

    public function modificar($info)
    {
        $this->nombre = $info;
        $this->imprimir();
    }

    public function imprimir()
    {   
        echo $this->nombre;
    }
}

$fulano = new Persona();
$fulano->modificar("Mimo Chon");



*/