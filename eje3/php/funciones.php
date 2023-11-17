<?php

function mostrarDetalles($rutaCompleta){
    $total = 0;
    $archivo = fopen($rutaCompleta, 'r');
    echo '<table class="table"><tbody>';
    while(!feof($archivo)) {
        $linea = fgets($archivo);
        if($linea != ''){
            //separo los datos 
            $linea = explode(';', $linea);
            //calculo el tiempo
            $horas = round((strtotime($linea[3]) - strtotime($linea[2]))/3600,0);
            //muestro los datos
            echo '<tr class="border">';
            echo '<td><p class="d-flex justify-content-between">'.$linea[0].' - '.$linea[1].'<span class="badge text-bg-primary d-inline">'.$horas.'</span></p>';
            echo '<p>$'.$horas*PRECIO_HORA.'</p>';
            echo '</td>';
            echo '</tr>';
            $total = $total + $horas*PRECIO_HORA;
        }
    }
    echo '</tbody></table>';
    echo '<article class="border border-3 rounded p-1"><h6>Total</h6><p>$'.$total.'</p></article>';
}

?>