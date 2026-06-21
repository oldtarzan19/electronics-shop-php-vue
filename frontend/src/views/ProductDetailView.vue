<script setup>
import { RouterLink } from 'vue-router'
</script>

<template>
  <main class="mx-auto max-w-7xl px-5 py-8 lg:px-8 lg:py-14">
    <div class="mb-8 flex items-center gap-2 text-xs font-bold text-slate-400">
      <RouterLink to="/">Kezdőlap</RouterLink><span>/</span><RouterLink to="/termekek">Audio</RouterLink><span>/</span><span class="text-ink">Sonic Pro X1</span>
    </div>

    <section class="grid gap-12 lg:grid-cols-[1.08fr_.92fr] lg:gap-16">
      <div class="grid gap-4 sm:grid-cols-[90px_1fr]">
        <div class="order-2 flex gap-3 sm:order-1 sm:flex-col">
          <div class="aspect-square w-20 overflow-hidden rounded-2xl border-2 border-brand bg-stone-200 p-1"><img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?auto=format&fit=crop&w=300&q=80" class="h-full w-full rounded-xl object-cover" alt="" /></div>
          <div class="aspect-square w-20 overflow-hidden rounded-2xl bg-stone-200 opacity-70"><img src="https://images.unsplash.com/photo-1505740106531-4243f3831c78?auto=format&fit=crop&w=300&q=80" class="h-full w-full object-cover" alt="" /></div>
          <div class="aspect-square w-20 overflow-hidden rounded-2xl bg-stone-200 opacity-70"><img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?auto=format&fit=crop&w=300&q=80" class="h-full w-full object-cover" alt="" /></div>
        </div>
        <div class="order-1 aspect-square overflow-hidden rounded-[2.5rem] bg-[#e8e5df] sm:order-2">
          <img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?auto=format&fit=crop&w=1000&q=90" alt="Sonic Pro X1 fejhallgató" class="h-full w-full object-cover" />
        </div>
      </div>

      <div class="lg:py-4">
        <div class="mb-5 flex items-center gap-3"><span class="rounded-full bg-ink px-3 py-1.5 text-[10px] font-black tracking-wider text-white uppercase">Bestseller</span><span class="text-sm font-bold text-emerald-600">● Raktáron</span></div>
        <p class="text-xs font-black tracking-[0.18em] text-brand uppercase">Prémium vezeték nélküli audio</p>
        <h1 class="display-title mt-3 text-5xl sm:text-6xl">SONIC PRO X1</h1>
        <div class="mt-4 flex items-center gap-3 text-sm"><span class="tracking-widest text-amber-400">★★★★★</span><span class="font-bold">4.9</span><span class="text-slate-400">(128 értékelés)</span></div>
        <p class="mt-7 text-3xl font-black">69 990 Ft</p>
        <p class="mt-6 max-w-xl leading-7 text-slate-600">Tiszta, részletgazdag hangzás és egész napos kényelem. Az adaptív zajszűrés kizárja a külvilágot, amikor valóban koncentrálnál.</p>

        <div class="mt-8">
          <p class="mb-3 text-xs font-black tracking-widest uppercase">Szín: <span class="normal-case text-slate-500">Grafit</span></p>
          <div class="flex gap-3"><button class="size-10 rounded-full border-4 border-white bg-slate-900 ring-2 ring-brand"></button><button class="size-10 rounded-full border-4 border-white bg-stone-300 ring-1 ring-black/20"></button><button class="size-10 rounded-full border-4 border-white bg-amber-100 ring-1 ring-black/20"></button></div>
        </div>

        <div class="mt-9 flex gap-3">
          <div class="flex items-center rounded-full border border-black/15 bg-white px-2"><button class="grid size-10 place-items-center text-xl">−</button><span class="w-8 text-center font-black">1</span><button class="grid size-10 place-items-center text-xl">+</button></div>
          <button class="flex-1 rounded-full bg-brand px-6 py-4 font-black text-white shadow-[0_8px_25px_rgba(255,79,47,.3)]">Kosárba teszem</button>
        </div>

        <div class="mt-9 grid gap-3 border-t border-black/10 pt-7 sm:grid-cols-2">
          <div class="flex gap-3 rounded-2xl bg-white p-4"><span class="text-xl">↗</span><div><p class="text-sm font-black">Gyors szállítás</p><p class="mt-1 text-xs text-slate-500">1–2 munkanapon belül</p></div></div>
          <div class="flex gap-3 rounded-2xl bg-white p-4"><span class="text-xl">↺</span><div><p class="text-sm font-black">14 napos visszaküldés</p><p class="mt-1 text-xs text-slate-500">Egyszerű, kérdések nélkül</p></div></div>
        </div>
      </div>
    </section>

    <section class="my-20 border-y border-black/10 py-12">
      <div class="grid gap-10 md:grid-cols-3">
        <div><p class="text-4xl font-black text-brand">40h</p><h3 class="mt-3 font-black">Akkumulátor</h3><p class="mt-2 text-sm leading-6 text-slate-500">Akár negyven óra zene egyetlen feltöltéssel.</p></div>
        <div><p class="text-4xl font-black text-brand">ANC</p><h3 class="mt-3 font-black">Adaptív zajszűrés</h3><p class="mt-2 text-sm leading-6 text-slate-500">A környezetedhez automatikusan igazodó csend.</p></div>
        <div><p class="text-4xl font-black text-brand">246g</p><h3 class="mt-3 font-black">Könnyű kialakítás</h3><p class="mt-2 text-sm leading-6 text-slate-500">Puha memóriahabos párnák, egész napos viselethez.</p></div>
      </div>
    </section>
  </main>
</template>
