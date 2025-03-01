@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Diameter') . ' ' . $class,
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
    <circle cx="19" cy="19" r="2" />
    <circle cx="5" cy="5" r="2" />
    <path d="M6.48 3.66a10 10 0 0 1 13.86 13.86" />
    <path d="m6.41 6.41 11.18 11.18" />
    <path d="M3.66 6.48a10 10 0 0 0 13.86 13.86" />
</svg>