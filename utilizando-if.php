<?php
/*Estructura de control If
La estructura de control es una de las más útiles y fáciles de programas,
consta del cumplimiento de una condición o no para poder ejecutar el código c
ontenido entre corchetes {} , la expresión lógica sería si la condición X se comple 
ejecutame este bloque de código,si no se cumple ejecuta este otro.Si la condicion es verdadera 
se ejecutara el codigo que estara dentro de los corchetes pertenecientes al If,si la condicion 
es falsa se ejecutara el codigo que estara contenido dentro de los corchetes pertenecientes al else.
*/

/*como podemos ver los parámetros a comprobar se colocaran dentro del if 
(parámetros),posteriormente seguirán los corchetes {Bloque de código} que 
contendrán dentro de estos el bloque de código a ejecutarsi se comple la 
condicion If;seguido del If tenemos otra instrucción llamada else que se ejecutara el 
codigo contenido dentro de sus corchetes si la condición del If no se cumpliera {Bloque del else}.*/

if ( “rojo”== “rojo”){ 
hecho “El color si que es Rojo”;
}else{
echo “El color NO es Rojo”;
}    // como la condicion se comple se ejecutara el IF

if ( “rojo”== “azul”){ 
hecho “El color si que es Rojo”;
}else{
echo “El color NO es Rojo”;
}   /* como esta condición  se ejecuta el else pues no coincide
    las dos comparaciones  “rojo” no es igual que “azul”*/

/*Enfrentando variables con la estructura del If .
También podremos enfrentar varias variables y realizar la
comprobación de las mismas 
con la estructura de control if.*/

$miVariable = “rojo”;
if(“rojo”==$miVariable){
echo “la variable es igual a Rojo”;
}else{
echo “la variable NO es igual a Rojo”;
}   /* la variable $miVariable tiene el valor de Rojo por lo tanto el resultado 
    será verdadero ejecutando la estructura del IF*/




?>
