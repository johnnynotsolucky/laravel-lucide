@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('DecimalsArrowRight') . ' ' . $class,
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
    <path d="M10 18h10" />
    <path d="m17 21 3-3-3-3" />
    <path d="M3 11h.01" />
    <rect x="15" y="3" width="5" height="8" rx="2.5" />
    <rect x="6" y="3" width="5" height="8" rx="2.5" />
</svg>