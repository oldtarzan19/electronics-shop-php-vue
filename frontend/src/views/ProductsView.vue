<script setup>
import { RouterLink } from 'vue-router'
</script>

<template>
  <main class="mx-auto max-w-7xl px-5 py-12 lg:px-8 lg:py-16">
    <div class="mb-12 max-w-3xl">
      <p class="mb-3 text-xs font-black tracking-[0.18em] text-brand uppercase">Válogatott technológia</p>
      <h1 class="display-title text-5xl sm:text-7xl">TERMÉKEK.</h1>
      <p class="mt-5 max-w-xl text-slate-500">Eszközök, amelyek jól néznek ki, megbízhatóan működnek és nem bonyolítják túl a napodat.</p>
    </div>

    <div id="kategoriak" class="mb-10 flex gap-2 overflow-x-auto pb-2">
      <button class="shrink-0 rounded-full bg-ink px-5 py-3 text-sm font-black text-white">Minden termék</button>
      <button class="shrink-0 rounded-full border border-black/15 bg-white px-5 py-3 text-sm font-bold">Laptopok</button>
      <button class="shrink-0 rounded-full border border-black/15 bg-white px-5 py-3 text-sm font-bold">Audio</button>
      <button class="shrink-0 rounded-full border border-black/15 bg-white px-5 py-3 text-sm font-bold">Telefonok</button>
      <button class="shrink-0 rounded-full border border-black/15 bg-white px-5 py-3 text-sm font-bold">Kiegészítők</button>
      <button class="shrink-0 rounded-full border border-black/15 bg-white px-5 py-3 text-sm font-bold">Gaming</button>
    </div>

    <div class="grid gap-10 lg:grid-cols-[230px_1fr]">
      <aside class="hidden lg:block">
        <div class="sticky top-28 space-y-8 rounded-3xl border border-black/10 bg-white p-6">
          <div>
            <label class="mb-3 block text-xs font-black tracking-widest uppercase">Keresés</label>
            <div class="flex items-center gap-2 rounded-xl border border-black/15 px-3">
              <svg viewBox="0 0 24 24" class="size-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7" /><path d="m20 20-4-4" /></svg>
              <input placeholder="Mit keresel?" class="w-full py-3 text-sm outline-none" />
            </div>
          </div>
          <div>
            <p class="mb-4 text-xs font-black tracking-widest uppercase">Kategória</p>
            <div class="space-y-3 text-sm">
              <label class="flex items-center justify-between"><span><input type="checkbox" checked class="mr-2 accent-[#ff4f2f]" />Audio</span><span class="text-slate-400">12</span></label>
              <label class="flex items-center justify-between"><span><input type="checkbox" class="mr-2 accent-[#ff4f2f]" />Laptop</span><span class="text-slate-400">8</span></label>
              <label class="flex items-center justify-between"><span><input type="checkbox" class="mr-2 accent-[#ff4f2f]" />Okosóra</span><span class="text-slate-400">6</span></label>
              <label class="flex items-center justify-between"><span><input type="checkbox" class="mr-2 accent-[#ff4f2f]" />Kiegészítő</span><span class="text-slate-400">18</span></label>
            </div>
          </div>
          <div>
            <p class="mb-4 text-xs font-black tracking-widest uppercase">Árkategória</p>
            <input type="range" class="w-full accent-[#ff4f2f]" />
            <div class="mt-2 flex justify-between text-xs text-slate-500"><span>5 000 Ft</span><span>500 000 Ft</span></div>
          </div>
          <div>
            <p class="mb-4 text-xs font-black tracking-widest uppercase">Elérhetőség</p>
            <label class="flex items-center text-sm"><input type="checkbox" checked class="mr-2 accent-[#ff4f2f]" />Csak raktáron</label>
          </div>
        </div>
      </aside>

      <section>
        <div class="mb-6 flex items-center justify-between">
          <p class="text-sm text-slate-500"><strong class="text-ink">24</strong> termék</p>
          <select class="rounded-full border border-black/15 bg-white px-4 py-2.5 text-sm font-bold outline-none">
            <option>Legnépszerűbb</option><option>Ár szerint növekvő</option><option>Legújabb</option>
          </select>
        </div>

        <div class="grid gap-x-5 gap-y-10 sm:grid-cols-2 xl:grid-cols-3">
          <RouterLink to="/termekek/sonic-pro" class="product-card">
            <div class="relative aspect-square overflow-hidden rounded-3xl bg-[#e8e5df]"><span class="absolute top-3 left-3 z-10 rounded-full bg-ink px-3 py-1.5 text-[9px] font-black text-white uppercase">Bestseller</span><img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?auto=format&fit=crop&w=700&q=85" alt="Sonic Pro X1 fejhallgató" class="product-image h-full w-full object-cover" /></div>
            <div class="px-1 pt-4"><p class="text-xs text-slate-400">Audio</p><div class="mt-1 flex justify-between gap-3"><h2 class="font-black">Sonic Pro X1</h2><p class="shrink-0 font-black">69 990 Ft</p></div></div>
          </RouterLink>
          <article class="product-card"><div class="relative aspect-square overflow-hidden rounded-3xl bg-[#dfe5e8]"><span class="absolute top-3 left-3 z-10 rounded-full bg-brand px-3 py-1.5 text-[9px] font-black text-white uppercase">Új</span><img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=700&q=85" alt="Pulse Watch okosóra" class="product-image h-full w-full object-cover" /></div><div class="px-1 pt-4"><p class="text-xs text-slate-400">Okosóra</p><div class="mt-1 flex justify-between gap-3"><h2 class="font-black">Pulse Watch S4</h2><p class="shrink-0 font-black">84 990 Ft</p></div></div></article>
          <article class="product-card"><div class="relative aspect-square overflow-hidden rounded-3xl bg-[#e8e2d8]"><span class="absolute top-3 left-3 z-10 rounded-full bg-white px-3 py-1.5 text-[9px] font-black uppercase">-15%</span><img src="https://images.unsplash.com/photo-1588423771073-b8903fbb85b5?auto=format&fit=crop&w=700&q=85" alt="Beat Mini hangszóró" class="product-image h-full w-full object-cover" /></div><div class="px-1 pt-4"><p class="text-xs text-slate-400">Hangszóró</p><div class="mt-1 flex justify-between gap-3"><h2 class="font-black">Beat Mini</h2><p class="shrink-0 font-black">33 990 Ft</p></div></div></article>
          <article class="product-card"><div class="aspect-square overflow-hidden rounded-3xl bg-[#e4e2df]"><img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=700&q=85" alt="AeroBook laptop" class="product-image h-full w-full object-cover" /></div><div class="px-1 pt-4"><p class="text-xs text-slate-400">Laptop</p><div class="mt-1 flex justify-between gap-3"><h2 class="font-black">AeroBook 14</h2><p class="shrink-0 font-black">389 990 Ft</p></div></div></article>
          <article class="product-card"><div class="aspect-square overflow-hidden rounded-3xl bg-[#ddd9d4]"><img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?auto=format&fit=crop&w=700&q=85" alt="Flow vezeték nélküli egér" class="product-image h-full w-full object-cover" /></div><div class="px-1 pt-4"><p class="text-xs text-slate-400">Kiegészítő</p><div class="mt-1 flex justify-between gap-3"><h2 class="font-black">Flow Mouse</h2><p class="shrink-0 font-black">24 990 Ft</p></div></div></article>
          <article class="product-card"><div class="aspect-square overflow-hidden rounded-3xl bg-[#dde0e5]"><img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?auto=format&fit=crop&w=700&q=85" alt="Studio kijelző" class="product-image h-full w-full object-cover" /></div><div class="px-1 pt-4"><p class="text-xs text-slate-400">Monitor</p><div class="mt-1 flex justify-between gap-3"><h2 class="font-black">Studio View 27</h2><p class="shrink-0 font-black">159 990 Ft</p></div></div></article>
        </div>
      </section>
    </div>
  </main>
</template>
