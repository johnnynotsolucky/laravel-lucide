@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('RulerDimensionLine') . ' ' . $class,
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
    <path d="M12 15v-3.014" />
    <path d="M16 15v-3.014" />
    <path d="M20 6H4" />
    <path d="M20 8V4" />
    <path d="M4 8V4" />
    <path d="M8 15v-3.014" />
    <rect x="3" y="12" width="18" height="7" rx="1" />
</svg>