<?php

namespace App\Setup;

/**
 * Autorise l'upload des SVG dans la médiathèque
 */
add_filter('upload_mimes', function ($mimes) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
});

/**
 * Corrige la validation WP (sinon "Sorry, this file type is not permitted...")
 */
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
  $filetype = wp_check_filetype($filename, $mimes);

  if (($filetype['ext'] ?? null) === 'svg') {
    $data['ext']  = 'svg';
    $data['type'] = 'image/svg+xml';
  }

  return $data;
}, 10, 4);

/**
 * Mini-fix d'affichage dans la médiathèque (WP ne "thumbnail" pas les SVG)
 */
add_action('admin_head', function () {
  echo '<style>
    .media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail {
      width: 100% !important;
      height: auto !important;
    }
  </style>';
});
