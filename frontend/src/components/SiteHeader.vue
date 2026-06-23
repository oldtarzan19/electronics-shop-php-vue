<script setup>
import { RouterLink } from 'vue-router'
import { useAuthStore } from '@/stores/auth.js'


const store = useAuthStore()

const logout = async ()  => {
  await store.logout();
}
</script>

<template>
  <div
    class="bg-ink px-4 py-2 text-center text-[11px] font-bold tracking-[0.18em] text-white uppercase sm:text-xs"
  >
    Ingyenes szállítás 30 000 Ft felett
  </div>

  <header class="sticky top-0 z-50 border-b border-black/10 bg-stone-50/95 backdrop-blur-md">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between gap-5 px-5 lg:px-8">
      <RouterLink to="/" class="flex shrink-0 items-center gap-2.5">
        <span
          class="grid size-9 place-items-center rounded-xl bg-brand text-white shadow-[4px_4px_0_#101828]"
        >
          <svg
            viewBox="0 0 24 24"
            class="size-5"
            fill="none"
            stroke="currentColor"
            stroke-width="2.2"
          >
            <path d="M13 2 4.5 13.2h6.7L10.5 22 19.5 10.8h-6.7L13 2Z" />
          </svg>
        </span>
        <span class="text-xl font-black tracking-[-0.05em]"
          >VOLT<span class="text-brand">.</span></span
        >
      </RouterLink>

      <nav class="hidden items-center gap-8 text-sm font-bold md:flex">
        <RouterLink to="/" class="transition hover:text-brand">Kezdőlap</RouterLink>
        <RouterLink to="/termekek" class="transition hover:text-brand">Termékek</RouterLink>
        <a href="/termekek#kategoriak" class="transition hover:text-brand">Kategóriák</a>
        <a href="#kapcsolat" class="transition hover:text-brand">Kapcsolat</a>
      </nav>

      <div class="flex items-center gap-2 sm:gap-3">
        <div v-if="!store.isAuthenticated" class="flex items-center gap-2">
          <RouterLink
            to="/bejelentkezes"
            class="hidden rounded-full px-3 py-2 text-sm font-bold transition hover:bg-black/5 sm:block"
          >
            Belépés
          </RouterLink>
          <RouterLink
            to="/regisztracio"
            class="hidden rounded-full bg-ink px-5 py-2.5 text-sm font-bold text-white transition hover:bg-brand sm:block"
          >
            Regisztráció
          </RouterLink>
        </div>
        <button
          v-else
          @click="logout"
          class="hidden rounded-full bg-ink px-5 py-2.5 text-sm font-bold text-white transition hover:bg-brand sm:block"
        >
          Kijelentkezés
        </button>
        <a
          href="#"
          aria-label="Kosár"
          class="relative grid size-11 place-items-center rounded-full border border-black/15 bg-white transition hover:border-brand hover:text-brand"
        >
          <svg
            viewBox="0 0 24 24"
            class="size-5"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
          >
            <path d="M3 4h2l2.1 10.1a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 2-1.6L20 7H6" />
            <circle cx="9.5" cy="20" r="1" />
            <circle cx="17.5" cy="20" r="1" />
          </svg>
          <span
            class="absolute -top-1 -right-1 grid size-5 place-items-center rounded-full bg-brand text-[10px] font-black text-white"
            >2</span
          >
        </a>
      </div>
    </div>
  </header>
</template>

<style scoped>
.router-link-exact-active {
  color: #ff4f2f;
}
</style>
