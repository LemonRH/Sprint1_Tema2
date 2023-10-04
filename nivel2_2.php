<?php

function compra(){
    echo "Puedes comprar chocolate, chicles y caramelos.\n";
    echo "Indica cuántos chocolates, chicles y caramelos deseas en orden.\n";
    $chocolates = readline();
    $chicles = readline();
    $caramelos = readline();

    $precio_total = ($chocolates*1)+($chicles*0.5)+($caramelos*1.5);
    echo "El precio total a pagar es de: ",$precio_total," euros";


}
compra();
?>