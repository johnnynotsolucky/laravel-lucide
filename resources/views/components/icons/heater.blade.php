@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Heater') . ' ' . $class,
        'width' => $size,
        'height' => $size,
        'viewBox' => '0 0 24 24',
        'fill' => 'none',
        'stroke' => $stroke,
        'stroke-width' => $strokeWidth,
        'stroke-linecap' => 'round',
        'stroke-linejoin' => 'round',
        'aria-hidden' => 'true'
    ]) }}
>
    <path d="M11 8c2-3-2-3 0-6" />
    <path d="M15.5 8c2-3-2-3 0-6" />
    <path d="M6 10h.01" />
    <path d="M6 14h.01" />
    <path d="M10 16v-4" />
    <path d="M14 16v-4" />
    <path d="M18 16v-4" />
    <path d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h3" />
    <path d="M5 20v2" />
    <path d="M19 20v2" />
</svg>