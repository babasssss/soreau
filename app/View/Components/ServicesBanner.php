<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicesBanner extends Component
{
    public array $services;

    /**
     * Create a new component instance.
     */
    public function __construct(array $services = [])
    {
        $this->services = !empty($services)
            ? $services
            : [
                'Event Photography',
                'Commercial Photography',
                'Product Photography',
                'Portrait Photography',
                'Lifestyle Photography',
                'Wedding Photography',
                'Landscape Photography',
                'Branding Photography',
                'Portrait Photography',
            ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services-banner');
    }
}
