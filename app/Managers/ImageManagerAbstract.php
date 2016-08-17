<?php

namespace App\Managers;

use app\Models\Image;
use Illuminate\Database\Eloquent\Model;

abstract class ImageManagerAbstract
{
    protected $allowedExtension = [
        'png', 'jpg', 'jpeg', 'gif',
    ];

    /**
     * @var Model
     */
    protected $model;

    public function __construct()
    {
    }

    /**
     * TODO(waplet): Refactor scope of function
     * @param $filename
     * @return Image
     */
    protected function getImageObject($filename)
    {
        $fileParts = pathinfo($filename);

        if (empty($fileParts['filename']) || !array_key_exists('extension', $fileParts)) {
            throw new \InvalidArgumentException('Incorrect filename specified: ' . $filename);
        }

        if (!in_array($fileParts['extension'], $this->allowedExtension)) {
            throw new \InvalidArgumentException('Incorrect extension specified: ' . $fileParts['extension']);
        }

        $data = [
            'title' => $fileParts['filename'],
            'extension' => $fileParts['extension'],
        ];

        return Image::create($data);
    }
}