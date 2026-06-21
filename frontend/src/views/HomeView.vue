<script setup>
import { RouterLink } from 'vue-router'
</script>

<template>
  <main>
    <section class="overflow-hidden border-b border-black/10 bg-cream">
      <div class="mx-auto grid min-h-[660px] max-w-7xl items-center gap-10 px-5 py-16 lg:grid-cols-[1.05fr_.95fr] lg:px-8 lg:py-20">
        <div class="relative z-10">
          <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-black/15 bg-white/70 px-4 py-2 text-xs font-black tracking-[0.16em] uppercase">
            <span class="size-2 rounded-full bg-brand"></span> Új generáció. Megérkezett.
          </div>
          <h1 class="display-title max-w-3xl text-6xl leading-[0.92] sm:text-7xl lg:text-[92px]">
            TECHNOLÓGIA,<br /><span class="text-brand">AMI VELED</span><br />HALAD.
          </h1>
          <p class="mt-8 max-w-xl text-base leading-7 text-slate-600 sm:text-lg">
            Válogatott eszközök munkához, játékhoz és mindenhez, ami közben történik.
            Tiszta választék, gyors szállítás.
          </p>
          <div class="mt-9 flex flex-wrap gap-3">
            <RouterLink to="/termekek" class="rounded-full bg-ink px-7 py-4 text-sm font-black text-white transition hover:bg-brand">
              Termékek felfedezése →
            </RouterLink>
            <a href="#kiemelt" class="rounded-full border border-black/20 bg-white/60 px-7 py-4 text-sm font-black transition hover:bg-white">
              Heti ajánlatok
            </a>
          </div>
          <div class="mt-12 flex flex-wrap gap-x-8 gap-y-3 text-xs font-bold text-slate-500">
            <span>✓ 2 év garancia</span><span>✓ 14 napos visszaküldés</span><span>✓ Biztonságos fizetés</span>
          </div>
        </div>

        <div class="relative mx-auto w-full max-w-xl">
          <div class="absolute -top-8 right-0 z-20 rotate-6 rounded-full bg-brand px-5 py-4 text-center text-sm font-black text-white shadow-xl">
            -20%<br /><span class="text-[10px] tracking-wider uppercase">ezen a héten</span>
          </div>
          <div class="absolute -bottom-5 -left-3 z-20 rounded-2xl bg-white p-4 shadow-2xl sm:left-0">
            <p class="text-[10px] font-black tracking-widest text-slate-400 uppercase">Kiemelt termék</p>
            <p class="mt-1 font-black">Sonic Pro X1</p>
            <p class="text-sm font-bold text-brand">69 990 Ft</p>
          </div>
          <div class="aspect-[4/5] overflow-hidden rounded-[3rem] bg-[#d9d5ca] shadow-[0_30px_80px_rgba(16,24,40,.18)]">
            <img
              src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=1100&q=90"
              alt="Prémium fejhallgató"
              class="h-full w-full object-cover"
            />
          </div>
        </div>
      </div>
    </section>

    <section class="border-b border-black/10 bg-white">
      <div class="mx-auto grid max-w-7xl grid-cols-2 divide-x divide-y divide-black/10 px-5 sm:grid-cols-4 sm:divide-y-0 lg:px-8">
        <div class="py-7 text-center"><p class="text-2xl font-black">24h</p><p class="text-xs text-slate-500">gyors feladás</p></div>
        <div class="py-7 text-center"><p class="text-2xl font-black">4.9/5</p><p class="text-xs text-slate-500">vásárlói értékelés</p></div>
        <div class="py-7 text-center"><p class="text-2xl font-black">2 év</p><p class="text-xs text-slate-500">teljes garancia</p></div>
        <div class="py-7 text-center"><p class="text-2xl font-black">100%</p><p class="text-xs text-slate-500">eredeti termék</p></div>
      </div>
    </section>

    <section id="kiemelt" class="mx-auto max-w-7xl px-5 py-20 lg:px-8">
      <div class="mb-10 flex items-end justify-between gap-6">
        <div>
          <p class="mb-3 text-xs font-black tracking-[0.18em] text-brand uppercase">Népszerű választások</p>
          <h2 class="display-title text-4xl sm:text-5xl">MOST EZEK MENNEK.</h2>
        </div>
        <RouterLink to="/termekek" class="hidden text-sm font-black underline decoration-brand decoration-2 underline-offset-4 sm:block">Összes termék</RouterLink>
      </div>

      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <RouterLink to="/termekek/sonic-pro" class="product-card group">
          <div class="relative aspect-square overflow-hidden rounded-[2rem] bg-[#e8e5df]">
            <span class="absolute top-4 left-4 z-10 rounded-full bg-ink px-3 py-1.5 text-[10px] font-black text-white uppercase">Bestseller</span>
            <img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?auto=format&fit=crop&w=800&q=85" alt="Fejhallgató" class="product-image h-full w-full object-cover" />
          </div>
          <div class="flex items-start justify-between gap-4 px-2 pt-5">
            <div><p class="text-xs font-bold text-slate-400">Audio</p><h3 class="mt-1 text-lg font-black">Sonic Pro X1</h3></div>
            <p class="font-black">69 990 Ft</p>
          </div>
        </RouterLink>

        <article class="product-card group">
          <div class="relative aspect-square overflow-hidden rounded-[2rem] bg-[#dfe5e8]">
            <span class="absolute top-4 left-4 z-10 rounded-full bg-brand px-3 py-1.5 text-[10px] font-black text-white uppercase">Új</span>
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=800&q=85" alt="Okosóra" class="product-image h-full w-full object-cover" />
          </div>
          <div class="flex items-start justify-between gap-4 px-2 pt-5">
            <div><p class="text-xs font-bold text-slate-400">Viselhető</p><h3 class="mt-1 text-lg font-black">Pulse Watch S4</h3></div>
            <p class="font-black">84 990 Ft</p>
          </div>
        </article>

        <article class="product-card group sm:col-span-2 lg:col-span-1">
          <div class="relative aspect-square overflow-hidden rounded-[2rem] bg-[#e8e2d8]">
            <span class="absolute top-4 left-4 z-10 rounded-full bg-white px-3 py-1.5 text-[10px] font-black uppercase">-15%</span>
            <img src="https://images.unsplash.com/photo-1588423771073-b8903fbb85b5?auto=format&fit=crop&w=800&q=85" alt="Hangszóró" class="product-image h-full w-full object-cover" />
          </div>
          <div class="flex items-start justify-between gap-4 px-2 pt-5">
            <div><p class="text-xs font-bold text-slate-400">Hangszóró</p><h3 class="mt-1 text-lg font-black">Beat Mini</h3></div>
            <div class="text-right"><p class="font-black">33 990 Ft</p><p class="text-xs text-slate-400 line-through">39 990 Ft</p></div>
          </div>
        </article>
      </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 pb-20 lg:px-8">
      <div class="relative overflow-hidden rounded-[2.5rem] bg-brand px-7 py-14 text-white sm:px-12 lg:py-20">
        <div class="relative z-10 max-w-2xl">
          <p class="mb-4 text-xs font-black tracking-[0.18em] uppercase">Okosabb választás</p>
          <h2 class="display-title text-4xl leading-none sm:text-6xl">NEM TÖBB KÜTYÜ.<br />JOBB KÜTYÜK.</h2>
          <p class="mt-6 max-w-lg leading-7 text-white/80">Minden termékünket használhatóság, minőség és hosszú távú érték alapján válogatjuk.</p>
        </div>
        <div class="absolute -right-16 -bottom-28 size-80 rounded-full border-[50px] border-white/10"></div>
      </div>
    </section>
  </main>
</template>
