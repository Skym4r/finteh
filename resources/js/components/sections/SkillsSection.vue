<template>
  <section id="skills" class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6">
      <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 mb-8 sm:mb-12">
        Навыки
      </h2>
      
      <div v-if="loading" class="text-center text-gray-500 py-8">Загрузка навыков...</div>
      
      <div v-else-if="skills.length === 0" class="text-center text-gray-500 py-8">
        Навыки пока не добавлены
      </div>
      
      <div v-else class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 max-w-4xl mx-auto">
        <div
          v-for="skill in skills"
          :key="skill.id"
          class="bg-gradient-to-br from-blue-50 to-white p-4 sm:p-6 rounded-xl text-center hover:shadow-lg transition border border-blue-100"
        >
          <div class="text-3xl sm:text-4xl mb-2">{{ skill.icon }}</div>
          <h3 class="text-sm sm:text-lg font-semibold text-gray-800">{{ skill.name }}</h3>
          <div class="w-full bg-gray-200 rounded-full h-2 mt-3">
            <div
              class="bg-gradient-to-r from-blue-500 to-blue-700 h-2 rounded-full transition-all duration-1000"
              :style="{ width: skill.level + '%' }"
            ></div>
          </div>
          <span class="text-xs text-gray-500 mt-1 block">{{ skill.level }}%</span>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const skills = ref([]);
const loading = ref(true);

onMounted(async () => {
  try {
    const response = await axios.get('/skills');
    skills.value = response.data;
  } catch (error) {
    console.error('Ошибка загрузки навыков:', error);
  } finally {
    loading.value = false;
  }
});
</script>