@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('TicketsPlane') . ' ' . $class,
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
    <path d="M10.5 17h1.227a2 2 0 0 0 1.345-.52L18 12" />
    <path d="m12 13.5 3.75.5" />
    <path d="m4.5 8 10.58-5.06a1 1 0 0 1 1.342.488L18.5 8" />
    <path d="M6 10V8" />
    <path d="M6 14v1" />
    <path d="M6 19v2" />
    <rect x="2" y="8" width="20" height="13" rx="2" />
</svg>