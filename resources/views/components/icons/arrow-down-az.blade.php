@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('ArrowDownAz') . ' ' . $class,
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
    <path d="m3 16 4 4 4-4" />
    <path d="M7 20V4" />
    <path d="M20 8h-5" />
    <path d="M15 10V6.5a2.5 2.5 0 0 1 5 0V10" />
    <path d="M15 14h5l-5 6h5" />
</svg>