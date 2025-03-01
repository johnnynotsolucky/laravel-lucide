@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('PictureInPicture') . ' ' . $class,
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
    <path d="M2 10h6V4" />
    <path d="m2 4 6 6" />
    <path d="M21 10V7a2 2 0 0 0-2-2h-7" />
    <path d="M3 14v2a2 2 0 0 0 2 2h3" />
    <rect x="12" y="14" width="10" height="7" rx="1" />
</svg>