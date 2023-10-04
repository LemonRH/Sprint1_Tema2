<?php
// cuando es menos de 50 no printa resultado
function isBitten(){
    $bite = rand(0,100);
    echo $bite," ";
    if($bite>49){
        echo "Has sido mordido.";
    }else{
        echo "No has sido mordido.";
    }
}
isBitten();
?>