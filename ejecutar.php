<?php 

 $cateto_a = $_POST['cateto_a'];
 $cateto_b = $_POST['cateto_b'];

 $resultado = "La Hipotenusa del triángulo rectangulo es : ";
 $raiz = null;
 $cuadrado = null;
if (!empty($cateto_a) && !empty($cateto_b) ){
    $cuadrado = pow($cateto_a, 2) + pow($cateto_b, 2);
 $raiz = sqrt($cuadrado);
 echo 'El cateto A es: '.$cateto_a,'<br>';
 echo 'El cateto B es: '.$cateto_b,'<br>';
 echo "$resultado $raiz";
}else{
   echo 'No puede dejar los campos vacios';
}

?>