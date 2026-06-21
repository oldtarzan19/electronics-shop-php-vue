<script setup>
import { RouterLink } from 'vue-router'
</script>

<template>
  <main class="grid min-h-[790px] lg:grid-cols-2">
    <section class="relative hidden overflow-hidden bg-brand lg:block">
      <img src="https://images.unsplash.com/photo-1498049794561-7780e7231661?auto=format&fit=crop&w=1200&q=85" alt="Elektronikai munkaállomás" class="absolute inset-0 h-full w-full object-cover mix-blend-multiply opacity-55" />
      <div class="absolute inset-0 bg-gradient-to-t from-ink/80 via-transparent to-transparent"></div>
      <div class="absolute right-12 bottom-12 left-12 text-white"><p class="text-xs font-black tracking-[0.18em] uppercase">Csatlakozz hozzánk</p><p class="display-title mt-3 max-w-xl text-5xl leading-none">A JOBB TECH ITT KEZDŐDIK.</p><div class="mt-7 flex gap-8 text-sm font-bold"><span>✓ Gyorsabb fizetés</span><span>✓ Rendeléskövetés</span></div></div>
    </section>

    <section class="flex items-center justify-center px-5 py-14 sm:px-10">
      <div class="w-full max-w-md">
        <p class="mb-3 text-xs font-black tracking-[0.18em] text-brand uppercase">Néhány lépés az egész</p>
        <h1 class="display-title text-5xl">REGISZTRÁCIÓ.</h1>
        <p class="mt-4 text-sm leading-6 text-slate-500">Hozd létre a fiókod, és legyen egyszerűbb minden következő vásárlás.</p>

        <form class="mt-8 space-y-4">
          <div class="grid gap-4 sm:grid-cols-2">
            <label class="block"><span class="mb-2 block text-xs font-black tracking-wider uppercase">Vezetéknév</span><input placeholder="Nagy" class="w-full rounded-2xl border border-black/15 bg-white px-4 py-3.5 outline-none focus:border-brand focus:ring-3 focus:ring-orange-100" /></label>
            <label class="block"><span class="mb-2 block text-xs font-black tracking-wider uppercase">Keresztnév</span><input placeholder="Anna" class="w-full rounded-2xl border border-black/15 bg-white px-4 py-3.5 outline-none focus:border-brand focus:ring-3 focus:ring-orange-100" /></label>
          </div>
          <label class="block"><span class="mb-2 block text-xs font-black tracking-wider uppercase">E-mail-cím</span><input type="email" placeholder="anna@pelda.hu" class="w-full rounded-2xl border border-black/15 bg-white px-4 py-3.5 outline-none focus:border-brand focus:ring-3 focus:ring-orange-100" /></label>
          <label class="block"><span class="mb-2 block text-xs font-black tracking-wider uppercase">Jelszó</span><input type="password" placeholder="Legalább 8 karakter" class="w-full rounded-2xl border border-black/15 bg-white px-4 py-3.5 outline-none focus:border-brand focus:ring-3 focus:ring-orange-100" /><span class="mt-2 block text-xs text-slate-400">Használj kis- és nagybetűt, valamint egy számot.</span></label>
          <label class="flex items-start gap-3 pt-2 text-sm leading-6 text-slate-500"><input type="checkbox" class="mt-1.5 accent-[#ff4f2f]" /><span>Elfogadom az <a href="#" class="font-bold text-ink underline">Általános Szerződési Feltételeket</a> és az adatkezelési tájékoztatót.</span></label>
          <button type="button" class="mt-2 w-full rounded-full bg-ink py-4 font-black text-white transition hover:bg-brand">Fiók létrehozása</button>
        </form>
        <p class="mt-7 text-center text-sm text-slate-500">Már van fiókod? <RouterLink to="/bejelentkezes" class="font-black text-ink underline decoration-brand decoration-2 underline-offset-4">Lépj be</RouterLink></p>
      </div>
    </section>
  </main>
</template>
