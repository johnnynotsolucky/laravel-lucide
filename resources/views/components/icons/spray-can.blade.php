@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('SprayCan') . ' ' . $class,
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
    <path d="M3 3h.01" />
    <path d="M7 5h.01" />
    <path d="M11 7h.01" />
    <path d="M3 7h.01" />
    <path d="M7 9h.01" />
    <path d="M3 11h.01" />
    <rect width="4" height="4" x="15" y="5" />
    <path d="m19 9 2 2v10c0 .6-.4 1-1 1h-6c-.6 0-1-.4-1-1V11l2-2" />
    <path d="m13 14 8-2" />
    <path d="m13 19 8-2" />
</svg>