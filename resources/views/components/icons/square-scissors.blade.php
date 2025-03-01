@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('SquareScissors') . ' ' . $class,
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
    <rect width="20" height="20" x="2" y="2" rx="2" />
    <circle cx="8" cy="8" r="2" />
    <path d="M9.414 9.414 12 12" />
    <path d="M14.8 14.8 18 18" />
    <circle cx="8" cy="16" r="2" />
    <path d="m18 6-8.586 8.586" />
</svg>