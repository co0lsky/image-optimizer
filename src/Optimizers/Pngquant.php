<?php

namespace SkyChin\ImageOptimizer\Optimizers;

use SkyChin\ImageOptimizer\Image;

class Pngquant extends BaseOptimizer
{
    public $binaryName = 'pngquant';

    public function canHandle(Image $image)
    {
        return $image->mime() === 'image/png';
    }

    public function getCommand()
    {
        $optionString = implode(' ', $this->options);

        return "\"{$this->binaryPath}{$this->binaryName}\" {$optionString}"
            .' '.escapeshellarg($this->imagePath)
            .' --output='.escapeshellarg($this->imagePath);
    }
}
