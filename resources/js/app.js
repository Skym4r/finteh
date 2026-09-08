import { createApp } from 'vue';
import App from './components/App.vue';
import axios from 'axios';

// Настройка базового URL для API
axios.defaults.baseURL = 'http://127.0.0.1:8000/api';
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Добавляем axios в глобальные переменные
window.axios = axios;

createApp(App).mount('#app');