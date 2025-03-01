@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('ContactRound') . ' ' . $class,
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
    <path d="M16 2v2" />
    <path d="M17.915 22a6 6 0 0 0-12 0" />
    <path d="M8 2v2" />
    <circle cx="12" cy="12" r="4" />
    <rect x="3" y="4" width="18" height="18" rx="2" />
</svg>