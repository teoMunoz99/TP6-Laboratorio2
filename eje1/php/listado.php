<?php
$ruta = "../css";
require_once('funciones.php');
require_once('encabezado.php');
require_once('logueo.php');

$email = "";
$password = "";
$msj = "";

//Recibo los datos que llegan en la url, uso GET porque los datos vienen en la url
if (empty($_GET['email']) && empty($_GET['password'])) {
    $msj = "Email o contraseña invalida";
} else {
    $email = $_GET['email'];
    $password = $_GET['password'];
    
    //Primero veo si ya existe el archivo inversiones.txt
    //guardo la ruta de la carpeta donde esta el archivo
    $ubicacion = '../datos';
    $nombreDelArchivo = 'log.txt';
    $rutaCompleta = $ubicacion . '/' . $nombreDelArchivo;
    
    //controlo si existe la carpeta, si no existe la creo
    if(!file_exists($ubicacion)){
        mkdir($ubicacion);
    }
    //abro el archivo para escritura, si no existe intenta crearlo
    $archivo = fopen($rutaCompleta,'a');
    //guardo los datos recibidos en el archivo
    $datosUnidos = $email.";".date('Y-m-d').";".date('H:i:s');
    fputs($archivo, $datosUnidos. PHP_EOL);
    //cierro el archivo
    fclose($archivo);
}
?>

<main class="container d-flex justify-content-center align-items-center">
    <section class="bg-dark text-light w-25 rounded-4 p-4">
        <?php
        echo ("<p class='text-danger'>" . $msj . "</p>");
        echo ("<p class=''>Email:<span class='text-warning'> " . $email . "</span></p>");
        echo ("<p class=''>Contraseña:<span class='text-warning'> " . $password . "</span></p>");
        ?>
    </section>
</main>

<?php
require_once('pie.php');
?>