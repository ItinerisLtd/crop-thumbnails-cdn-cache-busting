<?php
declare(strict_types=1);

namespace Itineris\CropThumbnails\CDN\CacheBusting;


class CroppedThumbnailCollection
{
    protected $croppedThumbnail = [];

    public function add(string $fullPath, string $sizeName): void
    {
        $croppedThumbnail[]['fullPath'] = $fullPath;
        $croppedThumbnail[]['size'] = $sizeName;
    }
}
