@props([
    'icon' => '✓',
    'title',
    'description'
])

<div class="group rounded-2xl border border-slate-200 bg-white p-6 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-slate-900 text-lg text-white transition group-hover:scale-105">
        {{ $icon }}
    </div>

    <h3 class="text-lg font-bold text-slate-900">
        {{ $title }}
    </h3>

    <p class="mt-3 leading-7 text-slate-600">
        {{ $description }}
    </p>

</div>