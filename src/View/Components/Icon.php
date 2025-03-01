<?php

namespace tyronetudehope\lucide\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $size = '24',
        public string $stroke = 'currentColor',
        public string $strokeWidth = '2',
        public string $class = '',
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // The component name will be used to determine which view to render
        $name = class_basename($this);
        $kebabName = strtolower(preg_replace('/([a-z0-9])([A-Z])/', '$1-$2', $name));
        
        return view("lucide::components.icons.{$kebabName}");
    }
} 