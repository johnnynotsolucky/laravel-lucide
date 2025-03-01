# Laravel Lucide Icons

A Laravel package that provides [Lucide](https://lucide.dev/) icons as Blade components.

## Installation

You can install the package via composer:

```bash
composer require johnnynotsolucky/laravel-lucide
```

The package will automatically register its service provider.

## Usage

You can use any Lucide icon as a Blade component:

```blade
<x-lucide::refresh-cw size="16" class="some-class" />
```

### Available Props

| Prop | Default | Description |
|------|---------|-------------|
| size | 24 | The size of the icon in pixels |
| stroke | currentColor | The stroke color of the icon |
| strokeWidth | 2 | The stroke width of the icon |
| class | '' | Additional CSS classes to apply to the icon |

You can also pass any additional HTML attributes to the component, which will be applied to the SVG element:

```blade
<x-lucide::refresh-cw size="16" class="some-class" data-testid="refresh-icon" />
```

## Publishing the Views

If you want to customize the icon components, you can publish the views:

```bash
php artisan vendor:publish --tag=lucide-views
```

## Generating Icons

This package includes a script to generate the icon components from the Lucide library. To generate the icons, run:

```bash
npm install
npm run generate-icons
```

## License

### Package License
The Laravel Lucide package is licensed under the MIT License. Please see [License File](LICENSE.md) for more information.

### Lucide Icons License
The Lucide icons themselves are licensed under the [ISC License](https://github.com/lucide-icons/lucide/blob/main/LICENSE) and are maintained by the [Lucide Icons project](https://github.com/lucide-icons/lucide). 