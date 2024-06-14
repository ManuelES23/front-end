<!-- The Modal -->
<div class="modal fade" id="formulario">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Agregar Album</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form class="formulario">
                    <div class="formulario__field">
                        <label for="nombre">Artista:</label>
                        <input type="text" id="artista" name="artista">
                    </div>
                    <div class="formulario__field">
                        <label for="nombre">Titulo:</label>
                        <input type="text" id="titulo" name="titulo" placeholder="Titulo del usuario">
                    </div>
                    <div class="formulario__field">
                        <label for="nombre">Lanzamiento:</label>
                        <input type="date" id="fecha_lanzamiento" name="fecha_lanzamiento">
                    </div>
                    <div class="formulario__field">
                        <label for="nombre">Numero de Canciones:</label>
                        <input type="number" id="num_canciones" name="num_canciones" placeholder="Numero de canciones">
                    </div>

                    <input type="hidden" name="estatus" id="estatus" value="1">

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" id="guardarAlbum" class="btn btn-success">Guardar</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>