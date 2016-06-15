<?php 

/*Estructura de Control FOR
Otra estructura de control altamente utilizada es la estructura FOR
con la estructura For podemos realizar un bucle,donde se seguirá ejecutando 
continuamente el código mientras la condición determinada en los parámetros se cumpla. 
La estructura FOR consta de tres parámetros,el primero la inicialización de la variable,
segundo la comparación de la condición,tercero una modificación de la variable inicializada.
En la primera condición se determina el inicio de la condición para el bucle,el la segunda se 
determina la condición para la finalización del bucle y en la tercera realizamos los cambios de 
la variable de inicio para que por cada vuelta de bucle vaya cambiando y se vaya acercando a la 
variable de cierre o de finalización,de no poner la tercera condición la estructura for formará 
un bucle infinito ya que las condiciones iniciales no cambian y se repetirá continuamente.
*/
for ($numero=0;$numero<=10;$numero++){
echo “Hace” .$numero. ”veces que paso por aqui<br>”;

}

/* con este for se imprimiría 10 veces el bloque de código de echo,
pero mostrando el incremento numérico por cada impresión,
hasta llegar al número 10 donde la condición de cierre 
( $numero<=10 )se cumpliria y se degaria de ejecutar el for,
la estructura sigue el siguiente camino lógico.
1.se inicia la variable
2. se realiza la comprobación y de ser positiva se sigue con el for.
3. se ejecuta el bloque de código del for {}
4.se ejecuta elultimo parametro,en el ejemplo el incremento de la variable $numero++ .
Por cada vuelta el for incrementará en una unidad la variable inicial $numero por medio 
del operador de incremento ++ ,a si en la primera vuelta será 0 su valor,
en la segunda 1,en la tercera 3 y así sucesivamente hasta llegar a sta 10.
Tenemos que tener en cuenta que el 0 también se contabiliza.
Si ponemos un comando por debajo del bucle for este no se ejecutará hasta que todo el bucle termine.*/

for ($numero=0;$numero<=10;$numero++){
echo “Hace” .$numero. ”veces que paso por aqui<br>”;

}
echo “La operacion for a terminado”;
//otros modos de utilización:
for ($numero=0;$numero<=10;$numero=$numero+2){
echo “Hace” .$numero. ”veces que paso por aqui<br>”;

}



?>
