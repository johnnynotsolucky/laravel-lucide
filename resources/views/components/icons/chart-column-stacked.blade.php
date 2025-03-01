@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('ChartColumnStacked') . ' ' . $class,
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
    <path d="M11 13H7" />
    <path d="M19 9h-4" />
    <path d="M3 3v16a2 2 0 0 0 2 2h16" />
    <rect x="15" y="5" width="4" height="12" rx="1" />
    <rect x="7" y="8" width="4" height="9" rx="1" />
</svg>