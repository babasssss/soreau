<?php
/**
 * Automatically loads all setup files that start with an underscore.
 * Example: _menu.php, _images.php, _roles.php, etc.
 */

namespace App\Setup;

$pattern = __DIR__ . '/_*.php';

// Avoid including this file if you put an underscore in it.
foreach (glob($pattern) as $file) {
    // For safety reasons, you can ignore any __setup-dir.php file that has been renamed by mistake.
    if (basename($file) === '__setup-dir.php') {
        continue;
    }

    require_once $file;
}
