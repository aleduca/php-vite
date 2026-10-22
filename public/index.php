<!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#09090b">
  <title>Início | PHP + Vite</title>
  <script type="module" src="/assets/js/bundle.js"></script>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="min-h-screen bg-zinc-950 text-zinc-100 antialiased">
  <div class="min-h-screen bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-indigo-950/40 via-zinc-950 to-zinc-950">
    <header class="mx-auto flex max-w-6xl items-center justify-between px-6 py-6">
      <a href="#inicio" class="flex items-center gap-3 text-lg font-semibold tracking-tight">
        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-indigo-500 text-sm font-bold text-white">D</span>
        <span>Darkspace</span>
      </a>
      <nav class="hidden items-center gap-8 text-sm text-zinc-400 sm:flex" aria-label="Navegação principal">
        <a href="#recursos" class="transition hover:text-white">Recursos</a>
        <a href="#sobre" class="transition hover:text-white">Sobre</a>
      </nav>
      <a href="#recursos" class="rounded-lg border border-zinc-700 px-4 py-2 text-sm font-medium transition hover:border-zinc-500 hover:bg-zinc-800">Explorar</a>
    </header>

    <main id="inicio" class="mx-auto max-w-6xl px-6 pb-24 pt-16 sm:pt-24">
      <section class="max-w-3xl">
        <span class="inline-flex items-center gap-2 rounded-full border border-indigo-400/20 bg-indigo-400/10 px-3 py-1 text-xs font-medium text-indigo-300">
          <span class="h-1.5 w-1.5 rounded-full bg-indigo-400"></span>
          Um espaço para novas ideias
        </span>
        <h1 class="mt-7 text-4xl font-semibold tracking-tight text-white sm:text-6xl">Seu próximo projeto começa <span class="text-indigo-400">aqui.</span></h1>
        <p class="mt-6 max-w-2xl text-lg leading-8 text-zinc-400">Uma interface simples, moderna e feita para dar vida às suas ideias. Explore um visual escuro com foco no que realmente importa.</p>
        <div class="mt-9 flex flex-wrap gap-4">
          <a href="#recursos" class="rounded-lg bg-indigo-500 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/20 transition hover:bg-indigo-400">Começar agora <span aria-hidden="true">→</span></a>
          <a href="#sobre" class="rounded-lg border border-zinc-700 px-5 py-3 text-sm font-semibold text-zinc-200 transition hover:border-zinc-500 hover:bg-zinc-900">Saiba mais</a>
        </div>
      </section>

      <section id="recursos" class="mt-24 grid gap-5 sm:grid-cols-3" aria-label="Recursos">
        <article class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 transition hover:border-zinc-700">
          <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-500/10 text-xl text-indigo-300" aria-hidden="true">✦</div>
          <h2 class="mt-5 text-lg font-semibold text-white">Design cuidadoso</h2>
          <p class="mt-2 text-sm leading-6 text-zinc-400">Uma composição limpa, com contraste equilibrado e detalhes que fazem a diferença.</p>
        </article>
        <article class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 transition hover:border-zinc-700">
          <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-500/10 text-xl text-indigo-300" aria-hidden="true">⌘</div>
          <h2 class="mt-5 text-lg font-semibold text-white">Fácil de adaptar</h2>
          <p class="mt-2 text-sm leading-6 text-zinc-400">Componentes organizados para você personalizar e expandir com facilidade.</p>
        </article>
        <article class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 transition hover:border-zinc-700">
          <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-500/10 text-xl text-indigo-300" aria-hidden="true">↗</div>
          <h2 class="mt-5 text-lg font-semibold text-white">Responsivo</h2>
          <p class="mt-2 text-sm leading-6 text-zinc-400">Uma experiência agradável em telas pequenas, médias e grandes.</p>
        </article>
      </section>

      <section id="sobre" class="mt-20 rounded-2xl border border-zinc-800 bg-zinc-900/40 px-6 py-8 sm:px-9">
        <h2 class="text-xl font-semibold text-white">Feito para construir</h2>
        <p class="mt-2 max-w-2xl text-sm leading-6 text-zinc-400">Esta página usa classes utilitárias do Tailwind CSS e está pronta para ser o ponto de partida do seu projeto.</p>
      </section>
    </main>

    <footer class="border-t border-zinc-900">
      <div class="mx-auto flex max-w-6xl flex-col gap-2 px-6 py-6 text-sm text-zinc-500 sm:flex-row sm:items-center sm:justify-between">
        <span>© 2025 Darkspace</span>
        <span>Feito com Tailwind CSS</span>
      </div>
    </footer>
  </div>
</body>
</html>