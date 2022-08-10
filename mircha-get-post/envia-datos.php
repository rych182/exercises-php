<?php

//$_GET y $_POST son variables globales que ya existe dentro del lenguaje PHP
// isset determina si una variable esta declarada y es diferente de nulo

if(isset($_GET["enviar_btn"])) {
    echo "Enviaste los datos por el método GET. <br> El nombre es: " . $_GET["nombre_txt"] . "<br>El password es: ". $_GET["password_txt"];
}else if(isset($_POST["enviar_btn"])){
    echo "Enviaste los datos por el método POST. <br> El nombre es: " . $_POST["nombre_txt"] . "<br>El password es: ". $_POST["password_txt"];
}