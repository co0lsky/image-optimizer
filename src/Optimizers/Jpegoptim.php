<?php

namespace SkyChin\ImageOptimizer\Optimizers;

use SkyChin\ImageOptimizer\Image;

class Jpegoptim extends BaseOptimizer
{
    public $binaryName = 'jpegoptim';

    public function canHandle(Image $image)
    {
        return $image->mime() === 'image/jpeg';
    }
}
