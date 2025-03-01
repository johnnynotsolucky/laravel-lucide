@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Bandage') . ' ' . $class,
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
    <path d="M10 10.01h.01" />
    <path d="M10 14.01h.01" />
    <path d="M14 10.01h.01" />
    <path d="M14 14.01h.01" />
    <path d="M18 6v11.5" />
    <path d="M6 6v12" />
    <rect x="2" y="6" width="20" height="12" rx="2" />
</svg>