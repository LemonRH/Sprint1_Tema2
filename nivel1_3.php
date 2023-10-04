<?php
//EJERCICIO a)
//declaración de variables tipo int y double
$X = 5;
$Y = 7;

$N = 2.5;
$M = 3.5;

//mostrar  x y por pantalla

echo $X, " ",$Y,"\n";
//suma de las dos variables, resta, producto y modulo
echo "La suma de X e Y es: ", ($X+$Y),"\n";
echo "La resta de X e Y es: ", ($X-$Y),"\n";
echo "El producto de X e Y es: ", ($X*$Y),"\n";
echo "El modulo de X e Y es: ", ($X/$Y),"\n";
//mismo ejercicio pero con varibales N y M
echo "La suma de N y M es: ", ($N+$M),"\n";
echo "La resta de N y M es: ", ($N-$M),"\n";
echo "El producto de N y M es: ", ($N*$M),"\n";
echo "El modulo de N y M es: ", ($N/$M),"\n";
// doble de cada variable, suma de todas las variables y producto
echo "El doble de X, Y, N y M es: ", ($X*$X)," ",($Y*$Y)," ",($N*$N)," ",($M*$M),"\n";
echo "La suma de todas las variables es: ", ($X+$Y+$N+$M),"\n";
echo "El producto de todas las variables es: ", ($X*$Y*$N*$M),"\n";

//Ejercicio b)
//realiza una calculadora pidiendo al usuario que introduzca 2 valores
echo "Calculadora: \n";
echo "Introduce el primer valor: \n";
$num_1 = readline();
echo "Introduce el segundo valor: \n";
$num_2 = readline();

echo "Introduce el operador de la operación que quieras realizar (+,-,*,/): \n";
$operador = readline();
if ($operador == "+") {
    echo "La suma de los dos números es:",($num_1+$num_2);
  } elseif ($operador == "-") {
    echo "La resta de los dos números es:",($num_1-$num_2);
  } elseif ($operador == "*") {
    echo "El producto de los dos números es:",($num_1*$num_2);
  }elseif ($operador == "/") {
    echo "El resto de los dos números es:",($num_1/$num_2);
  }else{
    echo "No has introducido un operador correcto.";
  }

?>