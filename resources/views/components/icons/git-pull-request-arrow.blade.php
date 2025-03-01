@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('GitPullRequestArrow') . ' ' . $class,
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
    <circle cx="5" cy="6" r="3" />
    <path d="M5 9v12" />
    <circle cx="19" cy="18" r="3" />
    <path d="m15 9-3-3 3-3" />
    <path d="M12 6h5a2 2 0 0 1 2 2v7" />
</svg>