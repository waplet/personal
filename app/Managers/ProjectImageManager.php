<?php

namespace App\Managers;

use App\Models\ProjectImage;
use Illuminate\Http\UploadedFile;

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

    /**
     * @param UploadedFile $file
     * @param $projectId
     *
     * @return ProjectImage
     */
    public function save(UploadedFile $file, $projectId)
    {
        $image = $this->saveImage($file);

        return $image->productImages()->save(
            new ProjectImage(['project_id' => $projectId])
        );
    }
}