<?php

namespace App\Models;

use App\Interfaces\ImageAwareInterface;
use App\Managers\ImageManagerAbstract;
use Illuminate\Database\Eloquent\Model;

abstract class ImageAbstract extends Model implements ImageAwareInterface
{
    /**
     * Returns path for image
     *
     * @return string
     */
    public function getPath()
    {
        $dir = ImageManagerAbstract::$directory;

        if (!$this->image) {
            return ImageManagerAbstract::$defaultImage;
        }
        return $dir . $this->id . '/' . $this->id . '.' . $this->image->extension;
    }
}