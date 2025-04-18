@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('KanbanSquareDashed') . ' ' . $class,
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
    <path d="M8 7v7" />
    <path d="M12 7v4" />
    <path d="M16 7v9" />
    <path d="M5 3a2 2 0 0 0-2 2" />
    <path d="M9 3h1" />
    <path d="M14 3h1" />
    <path d="M19 3a2 2 0 0 1 2 2" />
    <path d="M21 9v1" />
    <path d="M21 14v1" />
    <path d="M21 19a2 2 0 0 1-2 2" />
    <path d="M14 21h1" />
    <path d="M9 21h1" />
    <path d="M5 21a2 2 0 0 1-2-2" />
    <path d="M3 14v1" />
    <path d="M3 9v1" />
</svg>