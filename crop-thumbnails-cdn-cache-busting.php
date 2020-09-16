<?php

/**
 * Plugin Name:       Crop Thumbnails CDN Cache Busting
 * Plugin URI:        https://github.com/ItinerisLtd/crop-thumbnails-cdn-cache-busting
 * Description:       Bust CDN caches after cropping thumbnails. Requires the <a href="https://wordpress.org/plugins/crop-thumbnails/">Crop-Thumbnails</a> plugin.
 * Version:           0.1.2
 * Requires at least: 5.5
 * Requires PHP:      7.2
 * Author:            Itineris Limited
 * Author URI:        https://itineris.co.uk
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       crop-thumbnails-cdn-cache-busting
 */

declare(strict_types=1);

namespace Itineris\CropThumbnails\CDN\CacheBusting;

// If this file is called directly, abort.
use DateTimeImmutable;

if (! defined('WPINC')) {
    die;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

//Plugin::run();

//add_filter('crop_thumbnails_filename', function (string $fileName, $file, $width, $height, bool $crop): string {
//    if (! $crop) {
//        return $fileName;
//    }
//
//    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
//    $date = new DateTimeImmutable();
//
//    return sprintf(
//        '%s-%s.%s',
//        rtrim($fileName, '.' . $extension),
//        $date->getTimestamp(),
//        $extension
//    );
//}, -10, 5);
