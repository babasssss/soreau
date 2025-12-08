<?php

// app/Setup/_block-helpers.php

if (! function_exists('soreau_block_wrapper')) {
    /**
     * Helper pour construire les wrapper attributes d'un block Gutenberg.
     *
     * @param  WP_Block|null $block
     * @param  array         $attributes  Attributs du block (Gutenberg)
     * @param  string        $baseClass   Classe de base ex: 'soreau-title'
     * @param  array         $extraClasses Classes supplémentaires optionnelles
     * @param  array         $extraAttrs   Autres attributs (ex: data-*...)
     *
     * @return string  Attributs HTML prêts à être injectés dans le <div>
     */
    function soreau_block_wrapper($block, array $attributes, string $baseClass, array $extraClasses = [], array $extraAttrs = []): string
    {
        // Nom du block, ex : "soreau/title"
        $blockName = (is_object($block) && isset($block->name)) ? $block->name : null;

        // "soreau/title" -> "soreau-title"
        $blockSlug = $blockName ? str_replace('/', '-', $blockName) : null;

        // Classe additionnelle saisie dans l'éditeur (onglet Avancé)
        $customClassName = $attributes['className'] ?? null;

        // Toutes les classes (base + slug + custom + extra)
        $classes = [$baseClass, $blockSlug, $customClassName, ...$extraClasses];

        // On nettoie : remove null/'' puis remove doublons
        $classes = array_values(array_unique(array_filter($classes)));

        // Attributs finaux pour get_block_wrapper_attributes
        $attrs = array_merge([
            'class' => implode(' ', $classes),
        ], $extraAttrs);

        return get_block_wrapper_attributes($attrs);
    }
}
