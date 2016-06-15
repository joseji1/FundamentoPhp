<?php
/*La estructura de Control Switch
aunque la estructura de switch puede parecerse a la estructura de if else,
esta estructura se usa cuando tenemos que evaluar entre diversas condiciones 
facilitando la escritura del código,la misma instrucción también se podría realizar
con la instrucción de if else pero cada uno tendrá que decidir en que momento seria
mas conveniente utilizar el if else o switch aunque parezca que es lo mismo por el tiempo 
veremos que en algunas ocasiones la estructura switch nos ahorrará escritura de código. 
*/

$variable = 1;
switch ($variable) {
	case(1);
	echo “la variable es igual a 1”;
	break;
	case(2);
	echo “la variable es igual a 2”;
	break;
	case(3);
	echo “la variable es igual a 3”;
	break;

} // ejecutara el primer case

/* la estructura realizará la primera comprobación del primer case y si 
es verdadera ejecuta su bloque de código contenido entre el case y el 
break,este break sirve para terminar con cada caso,si el primer case
no es verdadero pasará a la comprobación del segundo case ejecutándose si 
fuera verdadero.El switch comprobará cada case hasta encontrar el verdadero.
De no poner un break se formará un bucle infinito volviéndose a repetir la comprobación sin pasar al case siguiente.*/

$variable = 3;
switch ($variable) {
	case(1);
	echo “la variable es igual a 1”;
	break;
	case(2);
	echo “la variable es igual a 2”;
	break;
	case(3);
	echo “Hola soy el ultimo Case”;
	break;

} // ejecutará el ultimo case

?>
