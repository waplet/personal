<?php

namespace App\Managers;

use App\Models\ProjectImage;

class ProjectImageManager extends ImageManagerAbstract
{
    protected $model = ProjectImage::class;

    public function removeImage($projectImageId)
    {
        $projectImage = ProjectImage::find($projectImageId);

        if (!$projectImage) {
            throw new \InvalidArgumentException('No project image found with specified id: ' . $projectImageId);
        }

        $imageId = $projectImage->image_id;

        $this->remove($imageId);
    }
}