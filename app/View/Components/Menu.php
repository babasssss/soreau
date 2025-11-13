<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use Log1x\Navi\Navi;

class Menu extends Component
{
    public function __construct(
        public string $name = 'primary_navigation',
        public ?string $variant = null,
        public int $depth = 3
    ) {}

    protected function computeTemplate(): string
    {
        return match ($this->name) {
            'primary_navigation'   => 'primary',
            'secondary_navigation' => 'secondary',
            'footer_navigation'    => 'footer',
            'legal_navigation'     => 'legal',
            default                => 'primary',
        };
    }

    protected function buildMenu()
    {
        $menu = Navi::make()->build($this->name);
        return $menu->isEmpty() ? null : $menu;
    }

    public function render()
    {
        $template = $this->computeTemplate();
        $view = "components.menu." . $template;

        if (! view()->exists($view)) {
            abort(500, "Menu view [$view] not found");
        }

        $m = $this->buildMenu();
        $items = $m ? $m->all() : [];

        return $this->view($view)->with([
            'm'         => $m,
            'items'     => $items,
            'menuTitle' => $m?->get('name') ?? '',
            'variant'   => $this->variant,
            'depth'     => $this->depth,
        ]);
    }
}
