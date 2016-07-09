<?php

namespace app\assets;
use yii\web\AssetBundle;

class HoverAsset extends AssetBundle {

    public $sourcePath = '@bower/hover';

    public $publishOptions = [
        'only' => [
            'css/*-min.css'
        ]
    ];

    public $css = [
        'css/hover-min.css'
    ];

}