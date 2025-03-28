@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('ScissorsLineDashed') . ' ' . $class,
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
    <path d="M5.42 9.42 8 12" />
    <circle cx="4" cy="8" r="2" />
    <path d="m14 6-8.58 8.58" />
    <circle cx="4" cy="16" r="2" />
    <path d="M10.8 14.8 14 18" />
    <path d="M16 12h-2" />
    <path d="M22 12h-2" />
</svg>