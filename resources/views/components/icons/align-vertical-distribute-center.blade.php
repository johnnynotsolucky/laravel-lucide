@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('AlignVerticalDistributeCenter') . ' ' . $class,
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
    <path d="M22 17h-3" />
    <path d="M22 7h-5" />
    <path d="M5 17H2" />
    <path d="M7 7H2" />
    <rect x="5" y="14" width="14" height="6" rx="2" />
    <rect x="7" y="4" width="10" height="6" rx="2" />
</svg>