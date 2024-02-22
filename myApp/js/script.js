const {createApp} = Vue;

// VARIABILE URL API
const endpoint = 'http://localhost/boolean/php-todo-list-json/api/task/';

const app = createApp ({

    name: 'MyApp',

    // DATI
    data: () => ({
        tasks: [],
        newTask: '',
    }),

    // FUNZIONI
    methods: {
        
        // FUNZIONE AL CLICK SUL BOTTONE
        getAddTask() {

            // VALORE DA MANDARE
            const data = { 'task': this.newTask };

            // INVIO QUALCOSA COME SE FOSSE UN FORM-DATA
            const config = { headers: {'Content-Type' : 'multipart/form-data'}}

            // MANDO VALORI
            axios.post(endpoint, data, config).then(res => {
                this.tasks = res.data;
                this.newTask = '';
            })
        },

    },

    // ALL'AVVIO DELLA PAGINA
    created(){

        // CHIAMO VALORI
        axios.get(endpoint).then(res => {
            this.tasks = res.data;
        })
    }
  
})

app.mount('#root');