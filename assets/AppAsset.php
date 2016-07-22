<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $publishOptions = [
        'only' => [
            '*.css',
            '*.js'
        ]
    ];

    public $css = [
        'css/materialize.css',
        'css/site.css',
        'css/effects.css'
    ];
    public $js = [
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'app\assets\HoverAsset',
        'app\assets\MaterializeAsset',
        'app\assets\NormalizeAsset'
    ];
}
