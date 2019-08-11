<?php

namespace SkyChin\ImageOptimizer\Optimizers;

use SkyChin\ImageOptimizer\Image;

class Gifsicle extends BaseOptimizer
{
    public $binaryName = 'gifsicle';

    public function canHandle(Image $image)
    {
        return $image->mime() === 'image/gif';
    }
}
