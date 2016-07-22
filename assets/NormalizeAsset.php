<?php

namespace app\assets;
use yii\web\AssetBundle;

/**
 * Class NormalizeAsset
 * @package app\assets
 *
 * Class that implements
 */
class NormalizeAsset extends AssetBundle{
    public $sourcePath = '@bower/normalize.css/';
    public $publishOptions = [
        'only' => [
            '*.css'
        ]
    ];
    public $css = [
      'normalize.css'
    ];
}