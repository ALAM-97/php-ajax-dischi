const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        genres: [],
        genreSelected: ""
    },
    methods: {
        filterGenres() {
            axios.get('http://localhost/php-ajax-dischi/api/index.php', {
                params: {
                    "genres": this.genreSelected
                }
            })
                .then((resp) => {
                    // handle success
                    this.albums = resp.data;
                })
        }
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/index.php')
            .then((resp) => {
                // handle success
                this.albums = resp.data;
                this.albums.forEach((elm) => {
                    if (!this.genres.includes(elm.genre)) {
                        this.genres.push(elm.genre)
                    }
                    return this.genres;
                });
            })
    }
})