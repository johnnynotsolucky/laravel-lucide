@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('UserCog') . ' ' . $class,
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
    <path d="M10 15H6a4 4 0 0 0-4 4v2" />
    <path d="m14.305 16.53.923-.382" />
    <path d="m15.228 13.852-.923-.383" />
    <path d="m16.852 12.228-.383-.923" />
    <path d="m16.852 17.772-.383.924" />
    <path d="m19.148 12.228.383-.923" />
    <path d="m19.53 18.696-.382-.924" />
    <path d="m20.772 13.852.924-.383" />
    <path d="m20.772 16.148.924.383" />
    <circle cx="18" cy="15" r="3" />
    <circle cx="9" cy="7" r="4" />
</svg>