@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Tractor') . ' ' . $class,
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
    <path d="m10 11 11 .9a1 1 0 0 1 .8 1.1l-.665 4.158a1 1 0 0 1-.988.842H20" />
    <path d="M16 18h-5" />
    <path d="M18 5a1 1 0 0 0-1 1v5.573" />
    <path d="M3 4h8.129a1 1 0 0 1 .99.863L13 11.246" />
    <path d="M4 11V4" />
    <path d="M7 15h.01" />
    <path d="M8 10.1V4" />
    <circle cx="18" cy="18" r="2" />
    <circle cx="7" cy="15" r="5" />
</svg>