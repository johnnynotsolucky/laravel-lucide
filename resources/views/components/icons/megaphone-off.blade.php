@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('MegaphoneOff') . ' ' . $class,
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
    <path d="M9.26 9.26 3 11v3l14.14 3.14" />
    <path d="M21 15.34V6l-7.31 2.03" />
    <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6" />
    <line x1="2" x2="22" y1="2" y2="22" />
</svg>