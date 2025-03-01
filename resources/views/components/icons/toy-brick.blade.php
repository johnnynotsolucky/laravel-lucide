@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('ToyBrick') . ' ' . $class,
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
    <rect width="18" height="12" x="3" y="8" rx="1" />
    <path d="M10 8V5c0-.6-.4-1-1-1H6a1 1 0 0 0-1 1v3" />
    <path d="M19 8V5c0-.6-.4-1-1-1h-3a1 1 0 0 0-1 1v3" />
</svg>