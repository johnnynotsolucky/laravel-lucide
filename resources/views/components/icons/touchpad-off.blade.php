@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('TouchpadOff') . ' ' . $class,
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
    <path d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16" />
    <path d="M2 14h12" />
    <path d="M22 14h-2" />
    <path d="M12 20v-6" />
    <path d="m2 2 20 20" />
    <path d="M22 16V6a2 2 0 0 0-2-2H10" />
</svg>