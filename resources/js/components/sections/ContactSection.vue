<template>
  <section id="contact" class="py-16 sm:py-20 bg-gradient-to-b from-blue-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 max-w-2xl">
      <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 mb-8 sm:mb-12">
        Связаться со мной
      </h2>
      
      <form @submit.prevent="submitForm" class="bg-white p-6 sm:p-8 rounded-2xl shadow-lg border border-blue-100">
        <div class="mb-4">
          <label class="block text-gray-700 font-medium mb-2 text-sm sm:text-base">Имя</label>
          <input
            v-model="form.name"
            type="text"
            required
            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm sm:text-base"
            placeholder="Ваше имя"
          />
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-medium mb-2 text-sm sm:text-base">Email</label>
          <input
            v-model="form.email"
            type="email"
            required
            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm sm:text-base"
            placeholder="your@email.com"
          />
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 font-medium mb-2 text-sm sm:text-base">Сообщение</label>
          <textarea
            v-model="form.message"
            rows="4"
            required
            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm sm:text-base"
            placeholder="Ваше сообщение..."
          ></textarea>
        </div>
        <button
          type="submit"
          class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition text-sm sm:text-base font-semibold shadow-md hover:shadow-lg"
          :disabled="loading"
        >
          {{ loading ? 'Отправка...' : 'Отправить сообщение' }}
        </button>
        
        <div v-if="successMessage" class="mt-4 p-3 bg-green-50 text-green-700 rounded-lg text-sm sm:text-base">
          {{ successMessage }}
        </div>
        <div v-if="errorMessage" class="mt-4 p-3 bg-red-50 text-red-700 rounded-lg text-sm sm:text-base">
          {{ errorMessage }}
        </div>
      </form>
    </div>
  </section>
</template>

<script setup>
import { reactive, ref } from 'vue';
import axios from 'axios';

const form = reactive({
  name: '',
  email: '',
  message: '',
});

const loading = ref(false);
const successMessage = ref('');
const errorMessage = ref('');

const submitForm = async () => {
  loading.value = true;
  successMessage.value = '';
  errorMessage.value = '';
  
  try {
    await axios.post('/messages', form);
    successMessage.value = '✅ Сообщение отправлено!';
    form.name = '';
    form.email = '';
    form.message = '';
  } catch (error) {
    console.error('Ошибка отправки:', error);
    errorMessage.value = '❌ Ошибка отправки. Попробуйте позже.';
  } finally {
    loading.value = false;
  }
};
</script>