<?php

/**
 * Automatically require all Setup/_*.php files and any PHP files in Setup/Blocks.
 */

collect([
    ...glob(__DIR__ . '/_*.php'),          // Charge les fichiers comme _customizer.php
    ...glob(__DIR__ . '/Blocks/_*.php'),   // Charge les fichiers dans Blocks/
])->each(fn($file) => require_once $file);
