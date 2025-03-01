@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Volleyball') . ' ' . $class,
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
    <path d="M11.1 7.1a16.55 16.55 0 0 1 10.9 4" />
    <path d="M12 12a12.6 12.6 0 0 1-8.7 5" />
    <path d="M16.8 13.6a16.55 16.55 0 0 1-9 7.5" />
    <path d="M20.7 17a12.8 12.8 0 0 0-8.7-5 13.3 13.3 0 0 1 0-10" />
    <path d="M6.3 3.8a16.55 16.55 0 0 0 1.9 11.5" />
    <circle cx="12" cy="12" r="10" />
</svg>