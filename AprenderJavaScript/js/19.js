// Métodos de propiedad
const reproductor = {
    reproducir: function(id){
        console.log(`Reproduciendo canción con el id ${id}`);
    },
    pausar: function(){
        console.log('Pausando...');
    },
    borrar: function(id){
        console.log(`Borrando canción con el id ${id}`);
    },
    crearPlaylist: function(nombre){
        console.log(`Creando la playlist ${nombre}`);
    },
    reproducirPlaylist: function(nombre){
        console.log(`Reproduciendo la playlist ${nombre}`);
    }
}

reproductor.reproducir(89);
reproductor.pausar();
reproductor.borrar(89);
reproductor.crearPlaylist('Heavy Metal');
reproductor.reproducirPlaylist('Heavy Metal');

