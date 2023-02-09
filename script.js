const { createApp } = Vue;
const apiUri = 'http://localhost/php-dischi-json/discs.php';
const app = createApp({
    data() {
        return {
            discs: [],

        }
    },
    methods: {
        index(i) {
            return console.log(this.discs[i].name);

        }
    },
    created() {
        axios.get(apiUri).then(res => {
            this.discs = res.data;
        });
    },
})

app.mount('#app')