<?php
$ruta = "css";
require_once('php/encabezado.php');
require_once('php/funciones.php');
?>

<main class="container d-flex justify-content-center align-items-center m-5">
    <section>
        <h1>Archivo LOG de inicio de sesion</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rutaCompleta = '../eje1/datos/log.txt';
                mostrarUsuario($rutaCompleta);
                ?>
            </tbody>
        </table>
    </section>
</main>

<?php
require_once('php/pie.php');
?>