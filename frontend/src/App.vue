<script setup>
import { RouterView } from 'vue-router'
import SiteHeader from './components/SiteHeader.vue'
import SiteFooter from './components/SiteFooter.vue'
</script>

<template>
  <div class="min-h-screen bg-stone-50 text-slate-950">
    <SiteHeader />
    <RouterView />
    <SiteFooter />
  </div>
</template>
