@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('ReplaceAll') . ' ' . $class,
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
    <path d="M14 14a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2" />
    <path d="M14 4a2 2 0 0 1 2-2" />
    <path d="M16 10a2 2 0 0 1-2-2" />
    <path d="M20 14a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2" />
    <path d="M20 2a2 2 0 0 1 2 2" />
    <path d="M22 8a2 2 0 0 1-2 2" />
    <path d="m3 7 3 3 3-3" />
    <path d="M6 10V5a 3 3 0 0 1 3-3h1" />
    <rect x="2" y="14" width="8" height="8" rx="2" />
</svg>