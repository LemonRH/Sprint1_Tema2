<?php

function criba($n){

    //crear un array del tamaño indicado(100 en este caso) empezando por el primer numero primo 
    for ($i=2; $i<$n;$i++){
        $lista[$i]=true;
    }
    //inicializar el primer numero primo (2)
    $lista [2]=true;

    for ($x=2; $x<$n; $x++){
        if ($lista[$x]){
            for ($i=$x*$x;$i<$n;$i+=$x){
                $lista[$i]=false;
            }
        }
    }
    //mostrar lista primos
    echo "Primos: ";
    for ($x = 2; $x < $n; $x++){
        if ($lista[$x])
        {
            echo $x." ";
        }
}
}
$final = 100;

criba($final);
?>