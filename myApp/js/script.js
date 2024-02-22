const {createApp} = Vue;

// VARIABILE URL API
const endpoint = 'http://localhost/boolean/php-todo-list-json/api/task/';

const app = createApp ({

    name: 'MyApp',

    // DATI
    data: () => ({
        tasks: []
    }),

    // ALL'AVVIO DELLA PAGINA
    created(){
        axios.get(endpoint).then(res => {
            this.tasks = res.data;
        })
    }
  
})

app.mount('#root');