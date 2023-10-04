<?php

function cuenta(int $numFinal =10){
    echo "De cuánto en cuánto quieres contar? \n";
    $salto = readline();
    $inicio = 0; //declaración variable de inicio (0)
    while ($inicio<=$numFinal){ //bucle que suma al inicio el salto de números que indica el usuario
        echo $inicio, "\n";
        $inicio+=$salto;
    }
}
//prueba con valor determinado y sin valor determinado
cuenta(22);
cuenta();
?>