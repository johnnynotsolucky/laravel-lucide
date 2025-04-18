@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Combine') . ' ' . $class,
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
    <path d="M10 18H5a3 3 0 0 1-3-3v-1" />
    <path d="M14 2a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2" />
    <path d="M20 2a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2" />
    <path d="m7 21 3-3-3-3" />
    <rect x="14" y="14" width="8" height="8" rx="2" />
    <rect x="2" y="2" width="8" height="8" rx="2" />
</svg>