const app = new Vue({
    el: '#app',
    data: {
        students: []
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/index.php')
            .then((resp) => {
                // handle success
                this.students = resp.data;
            })
    }
})