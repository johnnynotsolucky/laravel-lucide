@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('TentTree') . ' ' . $class,
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
    <circle cx="4" cy="4" r="2" />
    <path d="m14 5 3-3 3 3" />
    <path d="m14 10 3-3 3 3" />
    <path d="M17 14V2" />
    <path d="M17 14H7l-5 8h20Z" />
    <path d="M8 14v8" />
    <path d="m9 14 5 8" />
</svg>