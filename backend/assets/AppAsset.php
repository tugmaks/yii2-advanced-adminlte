<?php

namespace backend\assets;

use yii\web\AssetBundle;
use Tugmaks\AdminLTE\Assets\AdminLteAsset;
use yii\web\YiiAsset;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css      = [
        'css/site.css',
    ];
    public $depends  = [YiiAsset::class, AdminLteAsset::class];
}
