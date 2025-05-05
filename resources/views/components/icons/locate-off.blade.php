@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('LocateOff') . ' ' . $class,
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
    <path d="M12 19v3" />
    <path d="M12 2v3" />
    <path d="M18.89 13.24a7 7 0 0 0-8.13-8.13" />
    <path d="M19 12h3" />
    <path d="M2 12h3" />
    <path d="m2 2 20 20" />
    <path d="M7.05 7.05a7 7 0 0 0 9.9 9.9" />
</svg>