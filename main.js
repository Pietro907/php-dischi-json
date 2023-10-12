const { createApp } = Vue;

createApp({
    data() {
        return {
            title: 'Hello Pietro',
            todos: null,
            album: '',
        }
    },
    mounted() {
        axios.get('server.php')
            .then(res => {
                console.log(res);
                this.todos = res.data;
                console.log(this.todos);
            })
    },
}).mount('#app')