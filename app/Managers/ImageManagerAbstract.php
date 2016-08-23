<?php

namespace App\Managers;

use App\Interfaces\ImageAwareInterface;
use App\Models\Image;
use Illuminate\Http\UploadedFile;

abstract class ImageManagerAbstract
{
    protected $allowedExtension = [
        'png',
        'jpg',
        'jpeg',
        'gif',
    ];

    protected $basePath;

    public function __construct()
    {
        $this->basePath = public_path() . '/uploads/images/';
    }

    /**
     * @param ImageAwareInterface $image
     */
    public function removeImage(ImageAwareInterface $image)
    {
        // Removes current Image object
        $image->image()->delete();

        // Removes Child object
        $image->delete();
    }

    /**
     * @param UploadedFile $file
     *
     * @param null $imageId
     *
     * @return Image
     */
    protected function saveImage(UploadedFile $file, $imageId = null): Image
    {
        $imageObject = null;
        if ($imageId) {
            $imageObject = Image::find($imageId);
            if (!$imageObject) {
                throw new \InvalidArgumentException('Couldn\'t find image with id: ' . $imageId);
            }
        } else {
            $imageObject = $this->create($file->getClientOriginalName());
        }

        $this->moveImage($file, $imageObject->id);

        return $imageObject;
    }

    /**
     * @param $filename
     *
     * @return Image
     */
    protected function create($filename): Image
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

    /**
     * @param UploadedFile $file
     * @param $id
     *
     * @return bool
     */
    protected function moveImage(UploadedFile $file, $id)
    {
        $newName = $id . '.' . $file->getClientOriginalExtension();

        $file->move(
            $this->basePath . $id . '/', $newName
        );
    }

    protected function remove($imageId)
    {
        $imageObject = Image::find($imageId);

        if (!$imageObject) {
            // TODO(waplet): Or fail silently?
            throw new \InvalidArgumentException('No image found with specified id: ' . $imageId);
        }

        $file = $this->basePath . $imageId . '/' . $imageId . '.' . $imageObject->extension;
        if (file_exists($file)) {
            unlink($file);
        }

        $imageObject->delete();
    }
}