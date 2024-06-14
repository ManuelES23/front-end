const album = {
  artista: "",
  titulo: "",
  fecha_lanzamiento: "",
  num_canciones: "",
};

console.log(album);

$("#guardarAlbum").click(async function () {
  console.log("CLICK");
  const artista = $("artista").val();
  const titulo = $("titulo").val();
  const fecha_lanzamiento = $("fecha_lanzamiento").val();
  const num_canciones = $("artista").val();

  album.artista = artista;
  album.titulo = titulo;
  album.fecha_lanzamiento = fecha_lanzamiento;
  album.num_canciones = num_canciones;

  let resultado = await guardarAlbum(album);
});

async function guardarAlbum(album) {
  const { artista, titulo, fecha_lanzamiento, num_canciones } = album;

  const datos = new FormData();
  datos.append("artista", artista);
  datos.append("titulo", titulo);
  datos.append("fecha_lanzamiento", fecha_lanzamiento);
  datos.append("num_canciones", num_canciones);

  try {
    const url = "http://api.localhost/guardar";

    const respuesta = await fetch(url, {
      method: "POST",
      body: datos,
    });

    const resultado = respuesta.json();

    if (resultado.respuesta) {
      console.log("Guardado Correctamente");
    }
  } catch (error) {}
}
