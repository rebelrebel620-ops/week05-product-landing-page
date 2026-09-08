@props([
    'name',
    'price',
    'description',
    'featured' => false
])

<div class="relative rounded-2xl border {{ $featured ? 'border-slate-900 shadow-2xl' : 'border-slate-200' }} bg-white p-8">

    @if($featured)
        <div class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-full bg-slate-900 px-4 py-1 text-xs font-bold text-white">
            MOST POPULAR
        </div>
    @endif

    <h3 class="text-xl font-bold text-slate-900">
        {{ $name }}
    </h3>

    <p class="mt-2 text-sm text-slate-500">
        {{ $description }}
    </p>

    <div class="mt-6">
        <span class="text-4xl font-bold text-slate-950">
            {{ $price }}
        </span>

        @if($price !== 'Custom')
            <span class="text-slate-500">/month</span>
        @endif
    </div>

    <a href="#contact"
       class="mt-8 block rounded-xl px-5 py-3 text-center text-sm font-semibold transition
       {{ $featured
            ? 'bg-slate-900 text-white hover:bg-slate-700'
            : 'border border-slate-300 text-slate-700 hover:bg-slate-50' }}">
        Get Started
    </a>

    <div class="mt-8 border-t border-slate-200 pt-6">

        <p class="mb-4 text-sm font-bold text-slate-900">
            Includes:
        </p>

        <ul class="space-y-3 text-sm text-slate-600">
            {{ $slot }}
        </ul>

    </div>

</div>