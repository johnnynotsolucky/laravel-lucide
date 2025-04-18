@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('DraftingCompass') . ' ' . $class,
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
    <path d="m12.99 6.74 1.93 3.44" />
    <path d="M19.136 12a10 10 0 0 1-14.271 0" />
    <path d="m21 21-2.16-3.84" />
    <path d="m3 21 8.02-14.26" />
    <circle cx="12" cy="5" r="2" />
</svg>