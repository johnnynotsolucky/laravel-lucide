@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Logs') . ' ' . $class,
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
    <path d="M13 12h8" />
    <path d="M13 18h8" />
    <path d="M13 6h8" />
    <path d="M3 12h1" />
    <path d="M3 18h1" />
    <path d="M3 6h1" />
    <path d="M8 12h1" />
    <path d="M8 18h1" />
    <path d="M8 6h1" />
</svg>