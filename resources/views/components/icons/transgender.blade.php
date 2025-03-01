@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Transgender') . ' ' . $class,
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
    <path d="M12 16v6" />
    <path d="M14 20h-4" />
    <path d="M18 2h4v4" />
    <path d="m2 2 7.17 7.17" />
    <path d="M2 5.355V2h3.357" />
    <path d="m22 2-7.17 7.17" />
    <path d="M8 5 5 8" />
    <circle cx="12" cy="12" r="4" />
</svg>