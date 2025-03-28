@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('UserCog2') . ' ' . $class,
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
    <path d="M2 21a8 8 0 0 1 10.434-7.62" />
    <circle cx="10" cy="8" r="5" />
    <circle cx="18" cy="18" r="3" />
    <path d="m19.5 14.3-.4.9" />
    <path d="m16.9 20.8-.4.9" />
    <path d="m21.7 19.5-.9-.4" />
    <path d="m15.2 16.9-.9-.4" />
    <path d="m21.7 16.5-.9.4" />
    <path d="m15.2 19.1-.9.4" />
    <path d="m19.5 21.7-.4-.9" />
    <path d="m16.9 15.2-.4-.9" />
</svg>