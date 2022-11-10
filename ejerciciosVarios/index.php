<?php

$factorial = 1;
$numero = 5

for ($contador=1; $contador <=$numero; $contador++) { 
    $factorial = $factorial * $contador;
}





/*

------------------------------------EJERCICIOS ARRAYS--------------------------------------

EJERCICIO 0.01: Modulo(el residuo de una división)
$num1 = 10;
$num2= 6;

$resultado = $num1 % $num2;
echo $resultado;

EJERCICIO 0.02: Explicación de operador aritmetico 

$num1 = 10;
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

Ejercicio 0.010: 




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

Ejercicio 1.2: imprime los datos del array utilizando foreach
$frutas = array('pera','uva','manzana','melon','sandia','durazno','guayaba','naranja','mandarina');
foreach ($frutas as $fruta) {
    echo $fruta. "<br>";
}

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

Ejercicio 4: Usando WHILE imprime los números del 1-20 de 2 en 2 u, 
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

Ejercicio 9.4: que te diga si el número es decimal ó flotant
$x = 10.365;
var_dump(is_float($x));


--------------------------------------EJERCICIOS CONSTANTES-VARIABLES----------------------------------------------
Ejercicio 10: Imprimir una constante
define('Saludo',"Hola, ¿Cómo estas?!");
echo Saludo;

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

--------------------------------------------EJERCICIOS PRUEBAS TÉCNICAS--------------------------------------
Ejercicio 14.01: FACTORIAL DE UN NÚMERO !5= 5x4=20*3=60*2=120x1=120




*/