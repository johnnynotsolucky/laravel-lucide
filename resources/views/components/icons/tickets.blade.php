@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Tickets') . ' ' . $class,
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
    <path d="m4.5 8 10.58-5.06a1 1 0 0 1 1.342.488L18.5 8" />
    <path d="M6 10V8" />
    <path d="M6 14v1" />
    <path d="M6 19v2" />
    <rect x="2" y="8" width="20" height="13" rx="2" />
</svg>