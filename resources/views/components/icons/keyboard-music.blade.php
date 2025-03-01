@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('KeyboardMusic') . ' ' . $class,
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
    <rect width="20" height="16" x="2" y="4" rx="2" />
    <path d="M6 8h4" />
    <path d="M14 8h.01" />
    <path d="M18 8h.01" />
    <path d="M2 12h20" />
    <path d="M6 12v4" />
    <path d="M10 12v4" />
    <path d="M14 12v4" />
    <path d="M18 12v4" />
</svg>