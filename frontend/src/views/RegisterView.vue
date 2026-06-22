<script setup>
import { RouterLink } from 'vue-router'
import { ref } from 'vue'
import api from '@/services/api.js'

const formData = ref({
  name: '',
  password: '',
  email: '',
  address: '',
})

const submitForm = (e) => {
  e.preventDefault()

  api.post('/register', formData.value).then((response) => {
    console.log(response)
  }).catch((error) => {
    console.error(error)
  })
}
</script>

<template>
  <main class="grid min-h-[790px] lg:grid-cols-2">
    <section class="relative hidden overflow-hidden bg-brand lg:block">
      <img
        src="https://images.unsplash.com/photo-1498049794561-7780e7231661?auto=format&fit=crop&w=1200&q=85"
        alt="Elektronikai munkaállomás"
        class="absolute inset-0 h-full w-full object-cover mix-blend-multiply opacity-55"
      />
      <div
        class="absolute inset-0 bg-gradient-to-t from-ink/80 via-transparent to-transparent"
      ></div>
      <div class="absolute right-12 bottom-12 left-12 text-white">
        <p class="text-xs font-black tracking-[0.18em] uppercase">Csatlakozz hozzánk</p>
        <p class="display-title mt-3 max-w-xl text-5xl leading-none">A JOBB TECH ITT KEZDŐDIK.</p>
        <div class="mt-7 flex gap-8 text-sm font-bold">
          <span>✓ Gyorsabb fizetés</span><span>✓ Rendeléskövetés</span>
        </div>
      </div>
    </section>

    <section class="flex items-center justify-center px-5 py-14 sm:px-10">
      <div class="w-full max-w-md">
        <p class="mb-3 text-xs font-black tracking-[0.18em] text-brand uppercase">
          Néhány lépés az egész
        </p>
        <h1 class="display-title text-5xl">REGISZTRÁCIÓ.</h1>
        <p class="mt-4 text-sm leading-6 text-slate-500">
          Hozd létre a fiókod, és legyen egyszerűbb minden következő vásárlás.
        </p>

        <form @submit="submitForm" class="mt-8 space-y-4">
          <label class="block"
            ><span class="mb-2 block text-xs font-black tracking-wider uppercase"
              >Felhasználónév</span
            ><input
              v-model="formData.name"
              name="name"
              autocomplete="username"
              placeholder="Nagy Anna"
              class="w-full rounded-2xl border border-black/15 bg-white px-4 py-3.5 outline-none focus:border-brand focus:ring-3 focus:ring-orange-100"
          /></label>
          <label class="block"
            ><span class="mb-2 block text-xs font-black tracking-wider uppercase">E-mail-cím</span
            ><input
              v-model="formData.email"
              type="email"
              placeholder="anna@pelda.hu"
              class="w-full rounded-2xl border border-black/15 bg-white px-4 py-3.5 outline-none focus:border-brand focus:ring-3 focus:ring-orange-100"
          /></label>
          <label class="block"
            ><span class="mb-2 block text-xs font-black tracking-wider uppercase">Cím</span
            ><input
              v-model="formData.address"
              name="address"
              autocomplete="street-address"
              placeholder="Budapest, Példa utca 12."
              class="w-full rounded-2xl border border-black/15 bg-white px-4 py-3.5 outline-none focus:border-brand focus:ring-3 focus:ring-orange-100"
          /></label>
          <label class="block"
            ><span class="mb-2 block text-xs font-black tracking-wider uppercase">Jelszó</span
            ><input
              v-model="formData.password"
              type="password"
              placeholder="Legalább 8 karakter"
              class="w-full rounded-2xl border border-black/15 bg-white px-4 py-3.5 outline-none focus:border-brand focus:ring-3 focus:ring-orange-100"
            /><span class="mt-2 block text-xs text-slate-400"
              >Használj kis- és nagybetűt, valamint egy számot.</span
            ></label
          >
          <button
            type="submit"
            class="mt-2 w-full rounded-full bg-ink py-4 font-black text-white transition hover:bg-brand"
          >
            Fiók létrehozása
          </button>
        </form>
        <p class="mt-7 text-center text-sm text-slate-500">
          Már van fiókod?
          <RouterLink
            to="/bejelentkezes"
            class="font-black text-ink underline decoration-brand decoration-2 underline-offset-4"
            >Lépj be</RouterLink
          >
        </p>
      </div>
    </section>
  </main>
</template>
