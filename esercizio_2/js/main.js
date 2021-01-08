/**
 @file Stampare a schermo gli album, le cui informazioni sono contenute in una API esterna.
 Bonus: filtrare la visualizzazione degli album in base al genere.

 @author Giuseppe Perna <giuseppeperna.cg@gmail.com>
 */

// Init Vue object
const musicApp = new Vue({
    el: '#musicApp',
    data: {
        albums:[],
        selectedGenre:""
    },
    mounted() {
        axios.get("http://localhost/Lezione%2069/php-ajax-dischi/esercizio_2/database/db.php").then(result => {
            this.albums = result.data.response;
        })
    },
    computed: { //Filter album by genre
        filterAlbum() {
            return this.albums.filter(albums => {
                if(this.selectedGenre !== "") {
                    return albums.genre.toLowerCase() === this.selectedGenre.toLowerCase();
                } else {
                    return this.albums;
                }         
            })
          },
    }
})

