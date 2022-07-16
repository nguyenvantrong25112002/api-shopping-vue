require('./bootstrap');
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import router from './routes';
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"

// import { library, dom } from "@fortawesome/fontawesome-svg-core";
// import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
// import { fas } from '@fortawesome/free-solid-svg-icons'
// import { fab } from '@fortawesome/free-brands-svg-icons';
// import { far } from '@fortawesome/free-regular-svg-icons';


import Vue3EasyDataTable from 'vue3-easy-data-table';
import 'vue3-easy-data-table/dist/style.css';

import App from "./App.vue";
const app = createApp(App);
app.use(createPinia())
// app.component("font-awesome-icon", FontAwesomeIcon)
app.component('EasyDataTable', Vue3EasyDataTable);
app.use(router)
app.mount('#app')