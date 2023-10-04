<?php



function llamada(){
    echo "Introduce la duración de tu llamada en segundos: \n";
    $duracion = readline();

    if ($duracion<180){
        echo "El coste de la llamada es de 10 céntimos.\n";
    }elseif($duracion>180){
        $coste = (($duracion-180)*5)/60;

        echo "El coste de la llamada es de: ", ($coste+10)," centimos";
    }
    
}
llamada();
?>