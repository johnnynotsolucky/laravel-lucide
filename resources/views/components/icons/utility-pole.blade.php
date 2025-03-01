@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('UtilityPole') . ' ' . $class,
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
    <path d="M12 2v20" />
    <path d="M2 5h20" />
    <path d="M3 3v2" />
    <path d="M7 3v2" />
    <path d="M17 3v2" />
    <path d="M21 3v2" />
    <path d="m19 5-7 7-7-7" />
</svg>