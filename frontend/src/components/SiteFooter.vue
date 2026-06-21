<template>
  <footer id="kapcsolat" class="bg-ink text-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-14 sm:grid-cols-2 lg:grid-cols-4 lg:px-8">
      <div>
        <div class="mb-4 text-2xl font-black tracking-[-0.05em]">VOLT<span class="text-brand">.</span></div>
        <p class="max-w-xs text-sm leading-6 text-slate-400">
          Gondosan válogatott technológia, érthetően és felesleges körök nélkül.
        </p>
      </div>
      <div>
        <h3 class="mb-4 text-xs font-black tracking-[0.18em] uppercase">Vásárlás</h3>
        <div class="space-y-3 text-sm text-slate-400">
          <p>Termékek</p><p>Akciók</p><p>Szállítás</p><p>Garancia</p>
        </div>
      </div>
      <div>
        <h3 class="mb-4 text-xs font-black tracking-[0.18em] uppercase">Segítség</h3>
        <div class="space-y-3 text-sm text-slate-400">
          <p>Gyakori kérdések</p><p>Kapcsolat</p><p>Visszaküldés</p><p>Adatvédelem</p>
        </div>
      </div>
      <div>
        <h3 class="mb-4 text-xs font-black tracking-[0.18em] uppercase">Hírlevél</h3>
        <p class="mb-4 text-sm text-slate-400">Újdonságok és valóban jó ajánlatok. Spam nélkül.</p>
        <div class="flex rounded-full border border-white/15 bg-white/5 p-1">
          <input class="min-w-0 flex-1 bg-transparent px-4 text-sm outline-none" placeholder="email@cimed.hu" />
          <button class="grid size-10 shrink-0 place-items-center rounded-full bg-brand" aria-label="Feliratkozás">
            <svg viewBox="0 0 24 24" class="size-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m5 12 14-7-5 14-2.5-5.5L5 12Z" /></svg>
          </button>
        </div>
      </div>
    </div>
    <div class="border-t border-white/10 px-5 py-5 text-center text-xs text-slate-500">
      © 2026 VOLT. Oktatási célú mintafelület.
    </div>
  </footer>
</template>
