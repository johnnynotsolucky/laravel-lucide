@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Drum') . ' ' . $class,
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
    <path d="m2 2 8 8" />
    <path d="m22 2-8 8" />
    <ellipse cx="12" cy="9" rx="10" ry="5" />
    <path d="M7 13.4v7.9" />
    <path d="M12 14v8" />
    <path d="M17 13.4v7.9" />
    <path d="M2 9v8a10 5 0 0 0 20 0V9" />
</svg>