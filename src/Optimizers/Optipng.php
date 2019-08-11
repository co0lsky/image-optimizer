<?php

namespace SkyChin\ImageOptimizer\Optimizers;

use SkyChin\ImageOptimizer\Image;

class Optipng extends BaseOptimizer
{
    public $binaryName = 'optipng';

    public function canHandle(Image $image)
    {
        return $image->mime() === 'image/png';
    }
}
