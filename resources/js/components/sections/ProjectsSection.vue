<template>
  <section id="projects" class="py-16 sm:py-20 bg-gradient-to-b from-white to-blue-50">
    <div class="container mx-auto px-4 sm:px-6">
      <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 mb-8 sm:mb-12">
        Мои проекты
      </h2>
      
      <div v-if="loading" class="text-center text-gray-500 py-8">Загрузка проектов...</div>
      
      <div v-else-if="projects.length === 0" class="text-center text-gray-500 py-8">
        Проекты пока не добавлены
      </div>
      
      <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        <div
          v-for="project in projects"
          :key="project.id"
          class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden border border-gray-100"
        >
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ project.title }}</h3>
            <p class="text-gray-600 text-sm sm:text-base mb-4">{{ project.description }}</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span
                v-for="tech in project.technologies"
                :key="tech"
                class="bg-blue-50 text-blue-700 text-xs sm:text-sm px-3 py-1 rounded-full font-medium"
              >
                {{ tech }}
              </span>
            </div>
            <a
              :href="project.url"
              target="_blank"
              class="text-blue-600 hover:text-blue-800 font-semibold text-sm sm:text-base inline-flex items-center"
            >
              Подробнее →
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const projects = ref([]);
const loading = ref(true);

onMounted(async () => {
  try {
    const response = await axios.get('/projects');
    projects.value = response.data;
  } catch (error) {
    console.error('Ошибка загрузки проектов:', error);
  } finally {
    loading.value = false;
  }
});
</script>