@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Usb') . ' ' . $class,
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
    <circle cx="10" cy="7" r="1" />
    <circle cx="4" cy="20" r="1" />
    <path d="M4.7 19.3 19 5" />
    <path d="m21 3-3 1 2 2Z" />
    <path d="M9.26 7.68 5 12l2 5" />
    <path d="m10 14 5 2 3.5-3.5" />
    <path d="m18 12 1-1 1 1-1 1Z" />
</svg>