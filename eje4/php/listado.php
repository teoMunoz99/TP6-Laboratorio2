<?php
$ruta = "../css";
require_once('funciones.php');
require_once('encabezado.php');

//Recibo los datos que llegan en la url, uso GET porque los datos vienen en la url
if (empty($_POST['titulo']) && empty($_POST['jugadores']) && empty($_POST['lanzamiento']) && empty($_POST['genero']) && empty($_FILE['portada'])) {
    echo 'falta alguito';
} else {
    //Guardo los datos
    //Primero veo si ya existe el archivo juegos.txt
    //guardo la ruta de la carpeta donde esta el archivo
    $ubicacion = '../datos';
    $nombreDelArchivo = 'juegos.txt';
    $rutaCompleta = $ubicacion . '/' . $nombreDelArchivo;

    //controlo si existe la carpeta, si no existe la creo
    if (!file_exists($ubicacion)) {
        mkdir($ubicacion);
    }
    //abro el archivo para escritura, si no existe intenta crearlo
    $archivo = fopen($rutaCompleta, 'a');
    //guardo los datos recibidos en el archivo
    $datosUnidos = $_POST['titulo'] . ";" . $_POST['jugadores'] . ";" . $_POST['lanzamiento'] . ";" . $_POST['genero'];
    fputs($archivo, $datosUnidos . PHP_EOL);
    //cierro el archivo
    fclose($archivo);

    //Muevo la imagen
    $carpetaPortadas = '../img/portadas/';
    $nombreImagen = $_POST['titulo'].'.jpg';
    $rutaImagenCompleta = $carpetaPortadas . $nombreImagen;
    // Mover y renombrar el archivo
    if (move_uploaded_file($_FILES['portada']['tmp_name'], $rutaImagenCompleta)) {
        echo 'Datos y portada guardados correctamente.';
        header("Refresh: 3; URL=../index.php");
    } else {
        echo 'Error al mover la imagen de portada.';
    }
}
?>

<main class="container d-flex justify-content-center align-items-center">

</main>

<?php
require_once('pie.php');
?>