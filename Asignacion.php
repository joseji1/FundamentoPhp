<?php
/*Operadores de Asignación
Sabemos que el signo de asignación es  ( =  ),pero podemos también utilizar Operadores de 
asignación,esto es el resultado de combinar el signo de asignación ( = ) con un operador aritmético,
con esto logramos en primer lugar recoger una variable que contiene un valor de inicio y asignarle un valor 
que estará determinado por la operación que se realiza con dicho valor de inicio.*/

$mivariable = 7; //valor de inicio de la variable
echo $mivariable; // mostrará el valor 7 pues no fue aún modificado
$mivariable +=5; // se le suma a la variable inicial el valor de 5
echo “<br>”;
echo $mivariable; /* mostrará el valor de 12 resultado de la operacion 7 +5 de la anterior operacion */
echo “<br>”;
$mivariable -=5;// volvemos a restarle 5 al valor de 12
echo $mivariable;//mostrará el resultado de la resta 12 - 5 = 7
echo “<br”>;
$mivariable *=5; // multiplicamos 7 por 5 dando 35
echo $mivariable; // mostrará 35 operación anterior
echo “<br>”;
$mivariable /=5; //Dividimos 35 por 7 dando 7 de resultado
echo $mivariable; // mostrara  7 resultado de la operación anterior

?>
