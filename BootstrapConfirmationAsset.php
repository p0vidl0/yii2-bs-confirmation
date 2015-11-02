<?php

namespace p0vidl0\BootstrapConfirmationAsset;

use yii\web\AssetBundle;

class BootstrapConfirmationAsset extends AssetBundle
{
    public $sourcePath = '@bower/p0vidl0-bs-confirmation';
    public $js = [
        'bootstrap-confirmation.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
