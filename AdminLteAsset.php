<?php

namespace ahnames\themes\adminlte;

class AdminLteAsset extends \yii\web\AssetBundle
{
    public $depends = [
        'hipanel\themes\adminlte\AdminLteAsset',
        'ahnames\assets\ahnames\AhnamesAsset',
    ];
}
