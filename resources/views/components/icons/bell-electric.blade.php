@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('BellElectric') . ' ' . $class,
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
    <path d="M18.8 4A6.3 8.7 0 0 1 20 9" />
    <path d="M9 9h.01" />
    <circle cx="9" cy="9" r="7" />
    <rect width="10" height="6" x="4" y="16" rx="2" />
    <path d="M14 19c3 0 4.6-1.6 4.6-1.6" />
    <circle cx="20" cy="16" r="2" />
</svg>