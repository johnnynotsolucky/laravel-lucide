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
    <path d="M12 20v-6" />
    <path d="M19.656 14H22" />
    <path d="M2 14h12" />
    <path d="m2 2 20 20" />
    <path d="M20 20H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2" />
    <path d="M9.656 4H20a2 2 0 0 1 2 2v10.344" />
</svg>