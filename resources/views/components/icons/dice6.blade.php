@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Dice6') . ' ' . $class,
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
    <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
    <path d="M16 8h.01" />
    <path d="M16 12h.01" />
    <path d="M16 16h.01" />
    <path d="M8 8h.01" />
    <path d="M8 12h.01" />
    <path d="M8 16h.01" />
</svg>