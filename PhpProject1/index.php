<?php
include ("includes/class.TRIANGULO"); 
$triangulo = new TRIANGULO(NULL); 



echo $triangulo->get_triangulo_area();

if (isset($_POST['GUARDAR'])){
    echo 'EL AREA DEL TRIANGULO ES '.$triangulo->area($_POST ['BASE'], $_POST ['ALTURA']);
    
}
echo $triangulo->get_from_transporte_PERIMETRO();

if (isset($POST['GUARDAR PERIMETRO'])){
    echo 'si el perimetro del triangulo'.$triangulo->PERIMETRO($_POST['LADO1'], $_POST['LADO2'], $_POST['LADO3']);
}
