<?php

namespace SkyChin\ImageOptimizer;

use SkyChin\ImageOptimizer\Optimizers\Svgo;
use SkyChin\ImageOptimizer\Optimizers\Optipng;
use SkyChin\ImageOptimizer\Optimizers\Gifsicle;
use SkyChin\ImageOptimizer\Optimizers\Pngquant;
use SkyChin\ImageOptimizer\Optimizers\Jpegoptim;

class OptimizerChainFactory
{
    public static function create()
    {
        return (new OptimizerChain())
            ->addOptimizer(new Jpegoptim([
                '-m85',
                '--strip-all',
                '--all-progressive',
            ]))

            ->addOptimizer(new Pngquant([
                '--force',
            ]))

            ->addOptimizer(new Optipng([
                '-i0',
                '-o2',
                '-quiet',
            ]))

            ->addOptimizer(new Svgo([
                '--disable={cleanupIDs,removeViewBox}',
            ]))

            ->addOptimizer(new Gifsicle([
                '-b',
                '-O3',
            ]));
    }
}
