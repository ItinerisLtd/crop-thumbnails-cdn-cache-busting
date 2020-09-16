<?php
declare(strict_types=1);

namespace Itineris\CropThumbnails\CDN\CacheBusting;

class Plugin
{
    public static function run(): void
    {
        $x = new CroppedThumbnailCollection();

        add_action('crop_thumbnails_after_save_new_thumb', function ($fullPath, $sizeName, $sizeMetadata) use ($x): void {
            $x->add($fullPath, $sizeName);
        }, 10, 3);

//        crop_thumbnails_before_update_metadata

        add_filter('crop_thumbnails_before_update_metadata', function (array $imageMetadata, $sourceImageId) use ($x): array {
            $sizes = $imageMetadata['sizes'] ?? [];

            foreach ($sizes as $sizeName => $data) {
                wp_die($sizeName  . '   :' . var_export( $data));
            }

//            foreach ($x->croppedSizes as $croppedSize) {
//                $data = $sizes[$croppedSize] ?? [];
//                $actualFile = $data['file'] ?? [];
//                wp_die(var_export($actualFile));
//            }



        }, -10, 2);
    }
}
