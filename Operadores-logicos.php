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
echo ( $uno == 1 && $dos == 3) ; /* el resultado será Falso ya que solo se cumple la primera condición.*/



?>
