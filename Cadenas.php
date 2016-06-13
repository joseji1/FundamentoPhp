<php 
/* las cadenas de texto son texto que a su vez queremos que sean interpretados como 
tales, esto es, que queremsos se considere como texto simple,sin ningun tipo de formato solo como texto plano
este texto lo encerraremos entre comillas dobles o simples pero teneiendo cuidado de no repetir la scomillas usadas
para envolver es string( texto) que para mostrar como tales.Imaginemos que queremos poner dentro de un texto una comilla y que este comilla 
sea interpretada como comilla de texto,para poder realizar esta operacion podemos utilizar dos soluciones,la primera utilizar alternativamente 
comillas simples para las comillas como texto si se utilizo comillas dobles para envolver el codigo y viceversa o 
utilizar la barra de escape / para realizar un escape dentro de la cadena*/

  echo "soy una cadena <br>"; // si queremos poner comillas dobles entre una parte de la cadena no debemos repetir la misma clase de cadena  echo "soy una 'cadena'<br>"; .
	
	echo 'soy una cadena'; // si queremos poner comillas dobles entre una parte de la cadena no debemos repetir la misma clase de cadena  echo 'soy una "cadena" '; .
	echo "<br>";
	echo "Soy una \"cadena\" y estoy abligada"; // utilizando la contrabarra podremos escapar parte de la cadena para indicar que tambien forma parte del texto.
	echo "<br>";


?>
