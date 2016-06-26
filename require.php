<?php 
/*Los requiere son como los include,pero con la diferencia de que en caso de haber 
un Warning (advertencia) en los Include nos muestra el Warning pero el 
código sigue ejecutándose por debajo del Warning,es decir que el flujo de ejecución 
no se detendría.Esto no ocurre con los Require,con los Require si existiera un Warning 
el flujo de ejecución se detendrá mientras el Warning no sea solucionado.como su nombre 
indica Require ( es requerido para poder realizar la ejecución completa).El modo de utilización 
es el mismo que los includes pero llamando a Require.Si existiera un error nos mostraria 
un Fatal error;require() y el flujo se detendria.
*/
<?php
	echo “yo sos un archivo Principal”;
	require ”incluido.php”;
?>



?>
