@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('School2') . ' ' . $class,
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
    <circle cx="12" cy="10" r="1" />
    <path d="M22 20V8h-4l-6-4-6 4H2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2" />
    <path d="M6 17v.01" />
    <path d="M6 13v.01" />
    <path d="M18 17v.01" />
    <path d="M18 13v.01" />
    <path d="M14 22v-5a2 2 0 0 0-2-2a2 2 0 0 0-2 2v5" />
</svg>