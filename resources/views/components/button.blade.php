@props([
    'href' => '#',
    'variant' => 'primary'
])

<a href="{{ $href }}"
   class="inline-flex items-center justify-center rounded-xl px-6 py-3 text-sm font-semibold transition
   {{ $variant === 'primary'
        ? 'bg-slate-900 text-white hover:bg-slate-700'
        : 'border border-slate-300 bg-white text-slate-700 hover:bg-slate-50' }}">
    {{ $slot }}
</a>