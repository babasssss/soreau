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
                'Performance web',
                'Commercial Photography',
                'Maintenance & évolution',
                'API & intégrations',
                'Développement front-end',
                'Développement back-end',
                'E-commerce',
                'Sites vitrines',
                'WordPress sur mesure',
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
