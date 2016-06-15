<?php
/*Las Funciones 
Con las funciones podemos crear grandes bloques de código en php 
y guardarlo dentro de una función a la cual le pondremos un nombre
y la llamaremos en cualquier momento que la necesitamos,de este modo 
no tendremos que volver a reescribir el mismo código que ya habíamos escrito en otro momento.
*/

function miFuncion() {
	echo “Yo soy una funcion”;
echo “<br>”;
	echo “Me ejecutó si me llamas”;
	echo “<br>”;
	echo “no tienes que volver a escribirme”;
}
miFuncion();

/* una vez creada la función tenemos que llamarla para que se ejecute,para la creación
hemos definido lo que vamos a crear (function) y posteriormente le hemos puesto un nombre
que utilizaremos para llamarla ( miFuncion),a continuación y entre llaves hemos puesto todo 
el fragmento de código que se ejecutará con la función.Por debajo del bloque de la función estamos 
llamando a la mismo por su nombre para que esta se inicializa en esta parte del código ( miFuncion(); */
Como vemos solo tenemos que poner su nombre, sus parámetros si los tuviera ( para el ejemplo 
es una función sin parámetros “anonima”)
y terminar la llamada con un punto y coma ( ; ) .*/

/*Funciones con parámetros
También podemos construir funciones con parámetros internos definidos.
Los parámetros serán los datos a utilizar  y se pondrán dentro de los corchetes.
*/

function miTabla ($numero){
	for($multiplicador=0;$multiplicador<=10;$multiplicador++)
	echo $numero.” X “.$multiplicador.”=”.$numero*$multiplicador.”<br>”;

}
/*/*En la función ponemos como parámetro la variable $numero vacía,
abrimos un ciclo for dentro de los parámetros del for se pone
la variable $multiplicador en estado de 0(inicialización del ciclo),
las condiciones del bucle( $multiplicador<=10; si multiplicador es menor o igual a 10),
el cambio de estado de la variable inicial($multiplicador++),
el bloque de código que se ejecutará por cada ciclo.Explicacion del bloque de 
codigo:En primer lugar imprimira texto correspondiente a el valor de la variable
$numero ( esta variable aún está vacía,se le pasaran los parámetros al iniciar la función),
el texto ( X),el número correspondiente al valor de $multiplicador( que ira cambiando según el
bucle hasta llegar al número 10,contando el 0),el signo ( =) y finalmente mostrara la operación 
matemática resultado del cálculo (  &numero*$multiplicador)El valor de la variable $numero
multiplicado por el valor de la variable $multiplicador,como estamos hablando de un bucle 
lo que ocurre es que nos imprimira la tabla de multiplicar correspondiente al número introducido
en los parámetros de la funcion al inicializarla: ejemplo: 5x0=0,5x1=5,5x2=10,5x3=15,5x4=20… */
inicializando la función:

miTabla(5);// al inicializar le pasamos el valor de 5 que será el valor que tendrá la variable $número.

*/
//codigo completo
function miTabla ($numero){
	for($multiplicador=0;$multiplicador<=10;$multiplicador++)
	echo $numero.” X “.$multiplicador.”=”.$numero*$multiplicador.”<br>”;

}
miTabla(5);
/*Con este for utilizamos la funcion anteriormente creada,pero metemos el valor de la variable 
($numero)dentro de los varores de itineracion que nos ira devolviendo el bucle for por medio de
la variable $otronumero.
Lo que estamos haciendo es que en vez de meter un valor final en los parámetros de la
función ( miTabla) al inicializarla,lo que hacemos es que le pasamos los valores en 
incremento del bucle for ( miTabla($otronumero); ) de ese modo el valor de $numero 
sera igual al valor incrementado por cada itinerancia de la variable $otronumero,
teniendo como resultado las tablas de multiplicar del 0 al 10.
//con este for cálculo todas las tablas de multiplicar
*/
for ($otronumero=0;$otronumero<=10;$otronumero++){
	miTabla($otronumero);

}
/*Las Variables en las Funciones
Las variables en las funciones deben de definirse dentro de las mismas funciones,
esto quiere decir que no podemos utilizar variables que se hayan definido fuera de la función,
pero para poder remediar este pequeño problema y poder utilizar variables definidas externamente a la función
,tenemos que definirlas como variables globales en la misma función.
*/
$variable =”Variable externa”; // variable fuera de la función
function hola(){
	global $variable;// definimos como global la variable externa
	echo $variable;//utilizamos sin problema la variable externa

}

?>
