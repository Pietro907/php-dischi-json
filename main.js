const { createApp } = Vue;

createApp({
    data() {
        return {
            todos: null,
            album: '',
            base_url: 'server.php',
        }
    },
    methods:{
        fecthData(url) {
            axios.get(url)
                .then(res => {
                    console.log(res);
                    this.todos = res.data;
                    console.log(this.todos);
                })
        },
    },
    mounted(){
        this.fecthData(this.base_url);
      
    }
    
}).mount('#app')