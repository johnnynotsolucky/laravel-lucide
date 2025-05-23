@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('Dna') . ' ' . $class,
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
    <path d="m10 16 1.5 1.5" />
    <path d="m14 8-1.5-1.5" />
    <path d="M15 2c-1.798 1.998-2.518 3.995-2.807 5.993" />
    <path d="m16.5 10.5 1 1" />
    <path d="m17 6-2.891-2.891" />
    <path d="M2 15c6.667-6 13.333 0 20-6" />
    <path d="m20 9 .891.891" />
    <path d="M3.109 14.109 4 15" />
    <path d="m6.5 12.5 1 1" />
    <path d="m7 18 2.891 2.891" />
    <path d="M9 22c1.798-1.998 2.518-3.995 2.807-5.993" />
</svg>