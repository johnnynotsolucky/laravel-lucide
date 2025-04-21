@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Bubbles') . ' ' . $class,
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
    <path d="M7.2 14.8a2 2 0 0 1 2 2" />
    <circle cx="18.5" cy="8.5" r="3.5" />
    <circle cx="7.5" cy="16.5" r="5.5" />
    <circle cx="7.5" cy="4.5" r="2.5" />
</svg>