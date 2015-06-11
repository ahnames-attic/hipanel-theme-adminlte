<?php

namespace ahnames\themes\adminlte;

class AhnamesAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@ahnames/themes/adminlte/assets';

    public $css = [
        'css/hipanel.php',
    ];

    public $depends = [
        'ahnames\assets\ahnames\AhnamesAsset',
    ];
}
