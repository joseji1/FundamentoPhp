<?php 
/*Operadores Lógicos
Los operadores lógicos nos permiten comparar 2 o más
condiciones entre si y nos dándonos como resultado verdadero
o falso según si el resultado es positivo o no. Tenemos 3 tipos 
de operadores lógicos que son And;OR,Not.
*/

$uno = 1;
$dos = 2;
echo ( $uno == 1 && $dos == 2) ; /* utilizamos el operador AND que con el doble símbolo &&
                                   la expresión lógica sería: “si X es verdadero y D es verdadero”.Las  dos condiciones se cumple 
                                    dará verdadero. este operador será verdadero si las dos condiciones son positivas.
                                    en el ejemplo  la primera condición se cumple ya que  la variable $uno es igual a 1 
                                    y la segunda condición también se cumple ya que la variable $dos es igual a dos,
                                    por lo tanto el resultado será Verdadero,con un valor numérico de 1 por default,
                                    se utiliza el símbolo doble de ampersand &&*/
$uno = 1;
$dos = 2;
echo ( $uno == 1 && $dos == 3) ; 

//EL OPERTADOR OR
/* el resultado será Falso ya que solo se cumple la primera condición.*/
/*El operador OR  este operador determinará verdadero si solo una de las dos condiciones 
es verdadera,para que sea verdadero solo se tiene que cumplir una o la otra de las condiciones
.La expresion logica seria: “si x es verdadero o D es verdadero”,se utiliza la doble barra || .*/
$tres = 3;
$cuatro = 4;
echo ($tres == 3 || $cuatro ==5);/* con esta sentencia nos dara como resultado Verdadero 
        ya que una de las dos condiciones se cumple,esto es que la variable $tres es igual a 3,
        la segunda variable no se cumple pero mientras una de las dos sea positiva la el resultado 
        será true ( Verdadero). Uno de los Operandos es verdadero entonces será Verdadero el resultado*/

//También podemos utilizar en los parametros los operadores de negación.

$cinco = 5;
$seis = 6;
echo ($cinco !== $seis); // Verdadero ya que la variable $cinco no es igual que la variable $seis


?>
