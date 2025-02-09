'use strict'
console.log('collegato');
//vue
const { createApp } = Vue;
const objApp = {
    data() {
        return {
            title: 'Test API con PHP',
            title2: 'Sezione dettagli linguaggio',
            apiUrl: 'http://localhost/Code_Teoria/4_API/server.php/',
            //array vuoto iniziale
            linguaggi: [],
            //variabile per read
            current: null,
        };
    },
    methods: {
        //.get = tipo di chiamata che vogliamo fare
        //.then = quando avviene la risposta
        apiCall() {
            axios.get(this.apiUrl).then((resp) => {
                console.log(resp);
                this.linguaggi = resp.data;
            });
        },
        getCurrentL(id) {
            axios.get(this.apiUrl, {
                params: {
                    'idL': id,
                    action: 'read',
                },
            }).then((resp) => {
                console.log(resp);
                this.current = resp.data;
            });

        }
    },
    created() {
        console.log('axios chiamato');
        this.apiCall();
    },
};
const app = createApp(objApp);
app.mount('#app');