<script setup>
import { RouterLink } from 'vue-router'
</script>

<template>
  <main class="grid min-h-[720px] lg:grid-cols-2">
    <section class="flex items-center justify-center px-5 py-16 sm:px-10">
      <div class="w-full max-w-md">
        <p class="mb-3 text-xs font-black tracking-[0.18em] text-brand uppercase">Jó újra látni</p>
        <h1 class="display-title text-5xl">BELÉPÉS.</h1>
        <p class="mt-4 text-sm leading-6 text-slate-500">Lépj be a rendeléseidhez, kedvenceidhez és a gyorsabb vásárláshoz.</p>

        <form class="mt-9 space-y-5">
          <label class="block"><span class="mb-2 block text-xs font-black tracking-wider uppercase">E-mail-cím</span><input type="email" placeholder="hello@pelda.hu" class="w-full rounded-2xl border border-black/15 bg-white px-4 py-4 outline-none transition focus:border-brand focus:ring-3 focus:ring-orange-100" /></label>
          <label class="block"><span class="mb-2 block text-xs font-black tracking-wider uppercase">Jelszó</span><div class="flex rounded-2xl border border-black/15 bg-white pr-4 focus-within:border-brand focus-within:ring-3 focus-within:ring-orange-100"><input type="password" value="password123" class="min-w-0 flex-1 rounded-2xl px-4 py-4 outline-none" /><span class="grid place-items-center text-slate-400">◉</span></div></label>
          <div class="flex items-center justify-between text-sm"><label class="flex items-center gap-2"><input type="checkbox" class="accent-[#ff4f2f]" /> Emlékezz rám</label><a href="#" class="font-bold underline decoration-brand underline-offset-4">Elfelejtett jelszó?</a></div>
          <button type="button" class="w-full rounded-full bg-ink py-4 font-black text-white transition hover:bg-brand">Belépek</button>
        </form>

        <div class="my-7 flex items-center gap-4 text-xs text-slate-400"><span class="h-px flex-1 bg-black/10"></span>VAGY<span class="h-px flex-1 bg-black/10"></span></div>
        <button class="flex w-full items-center justify-center gap-3 rounded-full border border-black/15 bg-white py-4 text-sm font-black"><span class="text-lg font-black text-blue-500">G</span> Folytatás Google-fiókkal</button>
        <p class="mt-8 text-center text-sm text-slate-500">Még nincs fiókod? <RouterLink to="/regisztracio" class="font-black text-ink underline decoration-brand decoration-2 underline-offset-4">Regisztrálj</RouterLink></p>
      </div>
    </section>
    <section class="relative hidden overflow-hidden bg-ink lg:block">
      <img src="https://images.unsplash.com/photo-1550009158-9ebf69173e03?auto=format&fit=crop&w=1200&q=85" alt="Modern elektronikai eszközök" class="absolute inset-0 h-full w-full object-cover opacity-60" />
      <div class="absolute inset-0 bg-gradient-to-t from-ink via-transparent to-transparent"></div>
      <div class="absolute right-12 bottom-12 left-12 text-white"><p class="text-xs font-black tracking-[0.18em] text-brand uppercase">VOLT közösség</p><p class="display-title mt-3 max-w-xl text-5xl leading-none">MINDEN TECHNOLÓGIÁD. EGY HELYEN.</p></div>
    </section>
  </main>
</template>
