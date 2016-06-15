<?php

/*Utilizando estructuras de Control IF con los operadores de comparación.
con una estructura de control podremos determinar diferentes comportamientos 
según el resultado de la comparación,con esto podremos determinar ejecutar un 
bloque de código si el resultado es Verdadero o determinar que se ejecute otra e
structura de código si es Falso,de este modo nuestros desarrollos web obtienen un mayor dinamismo,
y un comportamiento más lógico.
*/

if ( 3 >2) {echo “tres es MAYOR que dos”;}
else{echo “tres es MENOR que dos”;}

/* con este if realizamos una operación dentro de sus parámetros 3>2 y 
si es verdadero ejecutara el primer bloque de código, que para el ejemplo es
un echo con una cadena de texto,si el resultado es falso ejecutará el segundo
bloque de código correspondiente al else,los bloques de código se delimitan con 
los dobles ( {} ).para el ejemplo el resultado sería verdadero ejecutando el primer 
hecho “ tres en MAYOR que dos” ; . */

//Segundo ejemplo:
if ( 2 >3) {echo “tres es MAYOR que dos”;}
else{echo “Dos  NO que es mayor que tres”;}

/*con este if se ejecutará el segundo bloque de código correspondiente al Else ya que daría como resultado Falso,
pues 2 no es mayor que 2.Mostraría el mensaje de la cadena de texto */ 

if ( 3 >=3) {echo “tres es MAYOR o igual que tres”;} // si 3 es mayor o igual a tres
else{echo “Tres  NO que es mayor o Igual tres”;}



?>
