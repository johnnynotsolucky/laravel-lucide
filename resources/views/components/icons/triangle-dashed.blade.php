@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('TriangleDashed') . ' ' . $class,
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
    <path d="M10.17 4.193a2 2 0 0 1 3.666.013" />
    <path d="M14 21h2" />
    <path d="m15.874 7.743 1 1.732" />
    <path d="m18.849 12.952 1 1.732" />
    <path d="M21.824 18.18a2 2 0 0 1-1.835 2.824" />
    <path d="M4.024 21a2 2 0 0 1-1.839-2.839" />
    <path d="m5.136 12.952-1 1.732" />
    <path d="M8 21h2" />
    <path d="m8.102 7.743-1 1.732" />
</svg>