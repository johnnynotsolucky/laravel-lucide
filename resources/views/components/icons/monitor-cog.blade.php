@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('MonitorCog') . ' ' . $class,
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
    <path d="M12 17v4" />
    <path d="m15.2 4.9-.9-.4" />
    <path d="m15.2 7.1-.9.4" />
    <path d="m16.9 3.2-.4-.9" />
    <path d="m16.9 8.8-.4.9" />
    <path d="m19.5 2.3-.4.9" />
    <path d="m19.5 9.7-.4-.9" />
    <path d="m21.7 4.5-.9.4" />
    <path d="m21.7 7.5-.9-.4" />
    <path d="M22 13v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7" />
    <path d="M8 21h8" />
    <circle cx="18" cy="6" r="3" />
</svg>