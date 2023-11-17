<?php
function mostrarUsuario($rutaCompleta){
    $archivo = fopen($rutaCompleta, 'r');
    while(!feof($archivo)) {
        $linea = fgets($archivo);
        if($linea != ''){
            //separo los datos 
            $linea = explode(';', $linea);
            //muestro los datos
            echo '<tr>';
            echo '<td>'.$linea[0].'</td>';
            echo '<td>'.$linea[1].'</td>';
            echo '<td>'.$linea[2].'</td>';
            echo '</tr>';
        }
    }
}


?>