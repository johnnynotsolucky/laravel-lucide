@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('SaudiRiyal') . ' ' . $class,
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
    <path d="m20 19.5-5.5 1.2" />
    <path d="M14.5 4v11.22a1 1 0 0 0 1.242.97L20 15.2" />
    <path d="m2.978 19.351 5.549-1.363A2 2 0 0 0 10 16V2" />
    <path d="M20 10 4 13.5" />
</svg>