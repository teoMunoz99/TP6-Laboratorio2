<?php
$ruta = "css";
require_once('php/encabezado.php');
?>

<main class="container d-flex justify-content-center align-items-center">
    <section class="bg-dark text-light rounded-4 p-4 m-5">
        <h2>Formulario de Alta de Videojuegos</h2>
        <form  action="php/listado.php" method="post" enctype="multipart/form-data">
            <!-- Título del videojuego -->
            <label class="form-label for="titulo">Título del Videojuego:</label>
            <input class="form-control" type="text" id="titulo" name="titulo" required>

            <!-- Número de jugadores -->
            <label class="form-label for="jugadores">Número de Jugadores:</label>
            <input class="form-control" type="number" id="jugadores" name="jugadores" required>

            <!-- Fecha de lanzamiento -->
            <label class="form-label for="lanzamiento">Fecha de Lanzamiento:</label>
            <input class="form-control" type="date" id="lanzamiento" name="lanzamiento" required>

            <!-- Género del videojuego -->
            <label class="form-label" for="genero">Género:</label>
            <select  class="form-control" id="genero" name="genero" required>
                <option value="accion">Acción</option>
                <option value="aventura">Aventura</option>
                <option value="estrategia">Estrategia</option>
                <option value="deportes">Deportes</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select>

            <!-- Cargar imagen de portada -->
            <label class="form-label for="portada">Imagen de Portada:</label>
            <input class="form-control" type="file" id="portada" name="portada" accept="image/*" required>

            <!-- Botón de envío del formulario -->
            <button class="btn btn-primary mt-4" type="submit">Guardar</button>
        </form>
    </section>
</main>

<?php
require_once('php/pie.php');
?>