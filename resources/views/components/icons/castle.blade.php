@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Castle') . ' ' . $class,
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
    <path d="M22 20v-9H2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2Z" />
    <path d="M18 11V4H6v7" />
    <path d="M15 22v-4a3 3 0 0 0-3-3a3 3 0 0 0-3 3v4" />
    <path d="M22 11V9" />
    <path d="M2 11V9" />
    <path d="M6 4V2" />
    <path d="M18 4V2" />
    <path d="M10 4V2" />
    <path d="M14 4V2" />
</svg>