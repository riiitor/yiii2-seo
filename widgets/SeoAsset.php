<?php
namespace riiitor\seo\widgets;

use yii\web\AssetBundle;

class SeoAsset extends AssetBundle {

    public $sourcePath = (__DIR__ . '/assets');

    public $js = [
        'js/seo.js'
    ];

    public  $depends = [
        'yii\web\JqueryAsset'
    ];
}