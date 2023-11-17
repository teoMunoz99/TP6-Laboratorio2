<?php
$ruta = "css";
require_once('php/encabezado.php');
require_once('php/funciones.php');
const PRECIO_HORA = 4000;
?>

<main class="container">
    <section class="">
        <h1 class="text-center">Detalle facturacion</h1>
        <?php
        $rutaCompleta = '../horas.txt';
        mostrarDetalles($rutaCompleta);
        ?>
    </section>
</main>

<?php
require_once('php/pie.php');
?>