<?php

namespace app\assets;
use yii\web\AssetBundle;

/**
 * Class MaterializeAsset
 * @package app\assets
 *
 * This class loads Materialize CSS library in the pipeline
 */
class MaterializeAsset extends AssetBundle{

    public $sourcePath = '@bower/materialize/dist';
    public $publishOptions = [
        'only' => [
            'css/*.min.css',
            'js/*.min.js',
            'fonts/roboto/*'
        ]
    ];

    public $css = [
        'css/materialize.min.css'
    ];

    public $js = [
        'js/materialize.min.js'
    ];

}