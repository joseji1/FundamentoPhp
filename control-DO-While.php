<?php 
/*El bucle Do-While
El bucle do-while es el mismo que el while salvo el orden de su ejecución,
en el bucle do-while a diferencia que con el while primero se ejecuta por 
primera vez el bloque de codigo y despues de la primera ejecución se comprobará 
las condiciones para decidir si volver o no a ejecutar el bloque.El bucle do-while 
siempre ejecutara mínimamente una vez el bloque de código.Funciona al revés que el while
*/
$variable = 1;
do {
	echo “hola”;

}while($variable > 2);

/* Aunque las condiciones no se cumplan ( $variable >2) la variable No es mayor que dos,
se ejecutará igualmente una vez el bloque de código con el echo “hola”; 
posteriormente realizará la comprobación y al determinar que no se cumplen 
las condiciones dejará de ejecutarse el bucle.Como podemos ver aunque las 
condiciones no se cumplen siempre se ejecutará obligatoriamente una vez el bloque de código.*/





?>
