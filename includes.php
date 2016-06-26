<?php 
/*Con include podemos introducir bloques de codigo php contenidos  en archivos externos.
Supongamos que tenemos un archivo externo y uno principal y que queremos incluir el externo dentro del principal.
Con esto podemos separar las diversas secciones de nuestra aplicacion podiendo distribuir y mantener todo el codigo
de forma mas eficiente,ganando rapidez cuando tenemos que modificar una seccion de nuestra aplicacion ya que nos evita
tener que realizar la misma modificacion sobre cada una de las paginas de nuestra aplicacion web.Canbiando el codigo 
de un solo archivo,los cambios se reflejaran en todos los archivos que lo hayamos incluido por medio de un include.
*/
//ejemplo con un arcivo externo de nombre incluido.php
//Externo con nombre incluido.php
<?php
	echo “yo sos un archivo externo”;
?>

//el contenido de incluido.php se incluira en archivoprincipal.php
//archivoprincipal.php
<?php
	echo “yo sos un archivo Principal”;
	include ”incluido.php”;
?>




?>
