<template>
  <header class="fixed w-full bg-white/95 backdrop-blur-sm shadow-md z-50">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-gray-800 hover:text-blue-600 transition">Portfolio</a>
      
      <!-- Десктопное меню -->
      <div class="hidden md:flex items-center space-x-6 lg:space-x-10">
        <a href="#about" class="text-gray-600 hover:text-blue-600 transition font-medium">Обо мне</a>
        <a href="#projects" class="text-gray-600 hover:text-blue-600 transition font-medium">Проекты</a>
        <a href="#skills" class="text-gray-600 hover:text-blue-600 transition font-medium">Навыки</a>
        <a href="#contact" class="text-gray-600 hover:text-blue-600 transition font-medium">Контакты</a>
      </div>

      <!-- Кнопка бургер-меню -->
      <button 
        @click="isMenuOpen = !isMenuOpen"
        class="md:hidden text-gray-600 hover:text-blue-600 focus:outline-none"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </nav>

    <!-- Мобильное меню -->
    <div v-if="isMenuOpen" class="md:hidden bg-white border-t shadow-lg">
      <div class="container mx-auto px-4 py-4 flex flex-col space-y-4">
        <a href="#about" class="text-gray-600 hover:text-blue-600 transition font-medium" @click="isMenuOpen = false">Обо мне</a>
        <a href="#projects" class="text-gray-600 hover:text-blue-600 transition font-medium" @click="isMenuOpen = false">Проекты</a>
        <a href="#skills" class="text-gray-600 hover:text-blue-600 transition font-medium" @click="isMenuOpen = false">Навыки</a>
        <a href="#contact" class="text-gray-600 hover:text-blue-600 transition font-medium" @click="isMenuOpen = false">Контакты</a>
      </div>
    </div>
  </header>
</template>

<script setup>
import { ref } from 'vue';

const isMenuOpen = ref(false);
</script>