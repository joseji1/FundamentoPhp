<?php
/*Estructura de control While
El bucle while es parecido al bucle if pero 
con menos requerimientos para ponerlo en funcionamiento.
Con while utilizaremos 1 parámetro que será la condición para 
que el bucle se active,la modificación de la condición que lo activo 
será agregada dentro y al final del mismo bloque del código {} a diferencia que el for.
*/
$variable = 0
while ($variable<=10){
	echo “hola” 
	$variable= $variable + 1;

}
/*El ciclo while se ejecutará pues las condiciones de los parámetros son 
verdaderas $variable en menor que 10,el bloque de codigo que ejecuta es un 
comando echo que imprima el texto “hola”.Si no ponemos otra condición al final de 
todo el bloque de código que modifique la condición de los parámetros iniciales,
la condicion siempre secumplira y se generara un bucle infinito;para que esto no 
ocurra establecemos un incremento del valor de la $variable ( $variable=$variable +1; )
con este comando modificaremos el valor inicial de la variable $variable incrementando
en 1 unidad por cada itinerancia hasta que la variable alcance el valor de 11 que sera 
cuando la condición inicial de los parámetros dejará de cumplirse y por ello se detendrá el bucle while .*/ 




?>
