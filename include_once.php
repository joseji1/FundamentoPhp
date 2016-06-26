<?php 
/*Con include once limitaremos la inclusión de un mismo archivo para poder 
impedir la sobreescritura de las variables.Utilizando esta función include
primero se comprobará si anteriormente el archivo ya fue incluido y
si no fue incluido se incluirá, pero si localiza que el archivo se 
incluyó anteriormente no lo volverá a incluir,anulando el include.
Su utilizacion es como el include pero con la extensiion once.Include_once (incluir solo una vez)
*/
<?php
include_once (“incluido.php”);

include_once (“incluido.php”);// comprueba que se ya está incluido y se rechazará

?>


?>
