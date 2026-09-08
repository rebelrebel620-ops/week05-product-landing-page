@props([
    'name',
    'position',
    'review',
    'initials'
])

<div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm">

    <div class="flex gap-1 text-lg text-slate-900">
        ★ ★ ★ ★ ★
    </div>

    <p class="mt-5 leading-7 text-slate-600">
        "{{ $review }}"
    </p>

    <div class="mt-6 flex items-center gap-4">

        <div class="flex h-11 w-11 items-center justify-center rounded-full bg-slate-900 font-bold text-white">
            {{ $initials }}
        </div>

        <div>
            <p class="font-bold text-slate-900">
                {{ $name }}
            </p>

            <p class="text-sm text-slate-500">
                {{ $position }}
            </p>
        </div>

    </div>

</div>