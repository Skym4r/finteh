<template>
  <AppLayout>
    <HeroSection />
    <AboutSection />
    <ProjectsSection />
    <SkillsSection />
    <ContactSection />
  </AppLayout>
</template>

<script setup>
import AppLayout from './layout/AppLayout.vue';
import HeroSection from './sections/HeroSection.vue';
import AboutSection from './sections/AboutSection.vue';
import ProjectsSection from './sections/ProjectsSection.vue';
import SkillsSection from './sections/SkillsSection.vue';
import ContactSection from './sections/ContactSection.vue';
</script>