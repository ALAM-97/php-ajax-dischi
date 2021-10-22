const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        genres: [],
        genreSelected: ""
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/index.php')
            .then((resp) => {
                // handle success
                this.albums = resp.data;
            })
    },
    methods: {
        genresFind() {
            this.albums.forEach(genre => {
                
                console.log(genre)
            });
        }
    //     selectGenre() {
    //         axios.get('http://localhost/php-ajax-dischi/api/index.php' ,{
    //             params: {
    //                 genre = this.genres
    //             }
    //         }) 
    //         .then((resp) => {
    //             // handle success
    //             console.log(resp.data.genre);
    //         })
    //     }
    }
})