<php

/*Operadores de Comparación
//**********************************************************************
Con los operadores de comparación podemos comparar si una variable tiene un 
valor determinado para ver si son verdaderos o falsos,de resultar la comparación
positiva el valor será de verdadero y de obtener como resultado negativo el resultado será falso.
Este operador nos sirve para realizar comprobaciones tales como si la variable $años es igual a 35 o 
por el contrario no es igual a 35,con esto podríamos saber si el dato introducido por el usuario web  
es el esperado o por el contrario es otro diferente y según el resultado obtenido por medio de esta comparación 
realizar una acción de código o otra acción, el operador se realiza con el código ( == ).El valor correspondiente 
por defecto de falso es 0 ( en este caso ,el valor cero no es igual al valor numérico de cero sino que es igual a el 
valor “ningún valor”,esto es que la cadena queda vacía y sin valor asignado,para el valor verdadero su valor numérico por
defecto es el valor de 1,teniendo la variable con tal resultado un valor numérico por defecto de 1
*/

echo 3==3;  // con el operador de igualdad == preguntamos si 3 es igual a 3 teniendo como resultado verdadero y mostrando el valor de 1 correspondiente al valor numérico de verdadero //
echo 3==4;  /* con esta comparación el resultado mostrado será ninguno ya que el valor 3 no es igual a 4 dando como resultado (falso) y mostrando una cadena vacía ya que el valor
            numérico de falso es ( ningún valor)quedando la cadena vacía.*/

/*También tenemos el operador de triple igualdad ( === ) 
con este operador no sólo comprobamos si se comple una igualdad de valor sino 
también de familia,le resultado tiene que ser completamente exacto,
esto es que la comparación sea idéntica para ser verdadera,
que tengan el mismo valor y que además sean del mismo tipo( cadena de texto o numérico.).
*/
echo 3===3;    // el resultado será verdadero ( con valor numérico de 1 )
echo 3===”3”;   /*el resultado será falso,pues aunque el valor numérico es el mismo entre los dos resultados,
                no son del mismo tipo,ya que uno es un número y el otro es una cadena de texto.el resultado será 
                falso dando una cadena vacía.Resultado nulo */

/*Operador diferente DE.Con este operador comprobamos 
si dos elementos son diferentes,a diferencia de los anteriores 
este operador dará verdadero si los dos valores dan como resultado 
una diferencia,esto es que X es diferente a D,sería un argumento 
de ( ¿ X es diferente de D ? ),por la misma operación si los dos elementos 
comparados son iguales el resultado será Falso ya que lo que se compara es la Diferencia.
*/
echo 3 !=4; // como 3 No es igual a 4 el resultado sera verdadero,siendo el valor numérico mostrado 1 
echo 3!=3; // Resultado sería falso ya que 3 es igual a 3.Cadena Nula

/*Con este operador también podemos utilizar la Doble igualdad ,para realizar una comparación 
exacta tanto de valor como de tipo ( !== ).
*/
echo 3 !== “3”; /* el resultado será Verdadero con el valor numérico de 1
                    pues 3 es igual en valor, 3 es igual a 3,pero no son iguales en el Tipo,
                    ya que la de la izquierda en numérico y el tipo de la derecha es de cadena de texto.*/


?>
