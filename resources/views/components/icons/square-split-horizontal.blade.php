@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('SquareSplitHorizontal') . ' ' . $class,
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
    <path d="M8 19H5c-1 0-2-1-2-2V7c0-1 1-2 2-2h3" />
    <path d="M16 5h3c1 0 2 1 2 2v10c0 1-1 2-2 2h-3" />
    <line x1="12" x2="12" y1="4" y2="20" />
</svg>