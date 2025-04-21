@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Shredder') . ' ' . $class,
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
    <path d="M10 22v-5" />
    <path d="M14 19v-2" />
    <path d="M14 2v4a2 2 0 0 0 2 2h4" />
    <path d="M18 20v-3" />
    <path d="M2 13h20" />
    <path d="M20 13V7l-5-5H6a2 2 0 0 0-2 2v9" />
    <path d="M6 20v-3" />
</svg>