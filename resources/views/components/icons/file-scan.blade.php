@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('FileScan') . ' ' . $class,
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
    <path d="M20 10V7l-5-5H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h4" />
    <path d="M14 2v4a2 2 0 0 0 2 2h4" />
    <path d="M16 14a2 2 0 0 0-2 2" />
    <path d="M20 14a2 2 0 0 1 2 2" />
    <path d="M20 22a2 2 0 0 0 2-2" />
    <path d="M16 22a2 2 0 0 1-2-2" />
</svg>