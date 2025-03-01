@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Haze') . ' ' . $class,
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
    <path d="m5.2 6.2 1.4 1.4" />
    <path d="M2 13h2" />
    <path d="M20 13h2" />
    <path d="m17.4 7.6 1.4-1.4" />
    <path d="M22 17H2" />
    <path d="M22 21H2" />
    <path d="M16 13a4 4 0 0 0-8 0" />
    <path d="M12 5V2.5" />
</svg>