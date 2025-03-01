@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('MonitorOff') . ' ' . $class,
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
    <path d="M17 17H4a2 2 0 0 1-2-2V5c0-1.5 1-2 1-2" />
    <path d="M22 15V5a2 2 0 0 0-2-2H9" />
    <path d="M8 21h8" />
    <path d="M12 17v4" />
    <path d="m2 2 20 20" />
</svg>