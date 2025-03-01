@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('FileCog') . ' ' . $class,
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
    <path d="M14 2v4a2 2 0 0 0 2 2h4" />
    <path d="m3.2 12.9-.9-.4" />
    <path d="m3.2 15.1-.9.4" />
    <path d="M4.677 21.5a2 2 0 0 0 1.313.5H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v2.5" />
    <path d="m4.9 11.2-.4-.9" />
    <path d="m4.9 16.8-.4.9" />
    <path d="m7.5 10.3-.4.9" />
    <path d="m7.5 17.7-.4-.9" />
    <path d="m9.7 12.5-.9.4" />
    <path d="m9.7 15.5-.9-.4" />
    <circle cx="6" cy="14" r="3" />
</svg>