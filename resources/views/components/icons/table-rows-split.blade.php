@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('TableRowsSplit') . ' ' . $class,
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
    <path d="M14 10h2" />
    <path d="M15 22v-8" />
    <path d="M15 2v4" />
    <path d="M2 10h2" />
    <path d="M20 10h2" />
    <path d="M3 19h18" />
    <path d="M3 22v-6a2 2 135 0 1 2-2h14a2 2 45 0 1 2 2v6" />
    <path d="M3 2v2a2 2 45 0 0 2 2h14a2 2 135 0 0 2-2V2" />
    <path d="M8 10h2" />
    <path d="M9 22v-8" />
    <path d="M9 2v4" />
</svg>