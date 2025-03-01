@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('ListOrdered') . ' ' . $class,
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
    <path d="M10 12h11" />
    <path d="M10 18h11" />
    <path d="M10 6h11" />
    <path d="M4 10h2" />
    <path d="M4 6h1v4" />
    <path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1" />
</svg>