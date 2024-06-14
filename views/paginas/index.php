<div class="head-pagina">
    <h1 class="titulo-pagina">Albumes</h1>
    <p class="descripcion-pagina">Administra tus albumes</p>
</div>

<button type="button" class="boton" data-bs-toggle="modal" data-bs-target="#formulario">Agregar Album</button>

<div class="contenedor">
    <table id="albums" class="table table-striped text-center" style="width: 100%;">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>ARTISTA</th>
                <th>TITULO</th>
                <th>LANZAMIENTO</th>
                <th>CANCIONES</th>
            </tr>
        </thead>

    </table>
</div>



<?php
include __DIR__ . '/formulario.php';
$script = '<script src="build/js/app.js"></script>';
?>