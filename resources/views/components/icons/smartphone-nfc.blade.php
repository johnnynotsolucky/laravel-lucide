@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('SmartphoneNfc') . ' ' . $class,
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
    <rect width="7" height="12" x="2" y="6" rx="1" />
    <path d="M13 8.32a7.43 7.43 0 0 1 0 7.36" />
    <path d="M16.46 6.21a11.76 11.76 0 0 1 0 11.58" />
    <path d="M19.91 4.1a15.91 15.91 0 0 1 .01 15.8" />
</svg>