<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SocialLinks extends Component
{
    /**
     * Liens sociaux disponibles (déjà filtrés).
     *
     * @var array<int, array{key:string, url:string, icon:string}>
     */
    public array $links = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Récupérer les URLs depuis les options du thème
        $linkedin  = trim((string) get_theme_mod('social_links_linkedin'));
        $youtube   = trim((string) get_theme_mod('social_links_youtube'));
        $instagram = trim((string) get_theme_mod('social_links_instagram'));

        $links = [
            'linkedin' => $linkedin ?: null,
            'youtube' => $youtube ?: null,
            'instagram' => $instagram ?: null,
        ];

        // On ne garde que ceux qui ont une URL
        foreach ($links as $key => $url) {
            if (! $url) {
                continue;
            }

            $this->links[] = [
                'key'  => $key,
                'url'  => esc_url($url),
                // Nom du composant Blade d’icône à utiliser
                'icon' => match ($key) {
                    'linkedin'  => 'icon-linkedin',
                    'youtube'   => 'icon-youtube',
                    'instagram' => 'icon-instagram',
                    default     => 'icon-link', // fallback éventuel
                },
            ];
        }
    }

    /**
     * Indique s’il y a au moins un lien.
     */
    public function hasLinks(): bool
    {
        return ! empty($this->links);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // Si aucun lien défini, on n'affiche rien du tout
        if (! $this->hasLinks()) {
            return '';
        }

        return view('components.social-links');
    }
}
