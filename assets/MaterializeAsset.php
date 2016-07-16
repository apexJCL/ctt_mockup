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
            'js/materialize.js',
        ]
    ];
    
    public $js = [
        'js/materialize.js'
    ];

}