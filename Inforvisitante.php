<?php
/*Podremos recoger informacion de nuestros visitantes tales como la ip y el navegador utilizado 
asi como su version y sistema al incluir la @ al principio de la variable $tuip se omitiran los warnings(adnertencias)
que pueden mostrar el navegador*/
 @$tuip = getenv (REMOTE_ADDR) ; //con este codigo lograremos extraer la información de la ip
	
	echo "Tu ip es :".$tuip; // mostraremos la ip del visitante
	
	$tunavegador = $_SERVER["HTTP_USER_AGENT"]; // con este codigo lograremos extraer la informacion del navegador y del sistema operativo del visitante
	echo " Y tu Navegador es".$tunavegador ;// mostraremos la información del navegador


?>
