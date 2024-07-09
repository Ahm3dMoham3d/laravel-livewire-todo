@props(['text', 'color' => 'primary'])

<button
    {{ $attributes->merge(['class' => "p-2 font-medium transition-transform rounded-md hover:scale-105 bg-{$color}"]) }}>
    {{ $slot }}
</button>
