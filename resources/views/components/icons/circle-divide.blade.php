@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('CircleDivide') . ' ' . $class,
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
    <line x1="8" x2="16" y1="12" y2="12" />
    <line x1="12" x2="12" y1="16" y2="16" />
    <line x1="12" x2="12" y1="8" y2="8" />
    <circle cx="12" cy="12" r="10" />
</svg>