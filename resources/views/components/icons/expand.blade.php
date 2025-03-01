@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Expand') . ' ' . $class,
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
    <path d="m15 15 6 6" />
    <path d="m15 9 6-6" />
    <path d="M21 16.2V21h-4.8" />
    <path d="M21 7.8V3h-4.8" />
    <path d="M3 16.2V21h4.8" />
    <path d="m3 21 6-6" />
    <path d="M3 7.8V3h4.8" />
    <path d="M9 9 3 3" />
</svg>