<?php
/*Estructura de control GOTO
Esta estructura de control nos permitirá realizar un salto
en el flujo de ejecución,esto es ,saltar de una pare a la otra 
de un fragmento de bloque de código.Con esta estructura podemos generar 
saltos a diferentes segmentos del código,controlando el flujo de la ejecución.
*/
goto marca;
echo “Este texto me lo saltare”;
marca: // inicio del salto goto
echo “este sera el fragmento que se ejecutara”;


/*en primer lugar definimos el goto poniéndole un nombre ( marca),
posteriormente iniciamos el goto poniendo su nombre seguido de dos puntos
y por encima del fragmento que queremos que empiece a ejecutar.*/



?>
